<?php

namespace App\Http\Controllers;

use App\Request as TopicRequest;
use Illuminate\Mail\Mailer;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Mail\TopicRequested;
use Illuminate\Http\RedirectResponse;

/**
 * Class TopicRequestsController
 *
 * @package App\Http\Controllers
 */
class TopicRequestsController extends Controller
{
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * @var TopicRequest
     */
    private $topicRequest;

    /**
     * TopicRequestsController constructor.
     *
     * @param Mailer $mailer
     * @param TopicRequest $topicRequest
     */
    public function __construct(
        Mailer $mailer,
        TopicRequest $topicRequest
    ) {
        $this->mailer = $mailer;
        $this->topicRequest = $topicRequest;
    }

    /**
     * Returns the view for the request form.
     *
     * @return View
     */
    public function index(): View
    {
        return view('requests');
    }

    /**
     * Sends an email and then redirects you to the thank you page.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function insert(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'fname'         => 'required|string',
            'lname'         => 'required|string',
            'email'         => 'required|string',
            'phone'         => 'string',
            'topic_request' => 'required',
            'hpc'           => 'accepted'
        ]);

        $this->topicRequest->first_name    = $request->fname;
        $this->topicRequest->last_name     = $request->lname;
        $this->topicRequest->email_address = $request->email;
        $this->topicRequest->phone_number  = $request->phone;
        $this->topicRequest->topic_request = $request->topic_request;

        $this->topicRequest->save();

        $this->mailer
            ->to(getenv('MAIL_TO'))
            ->send(
                new TopicRequested($request)
            );

        return redirect('/meetup-events/request-topic/thanks');
    }

    /**
     * Displays the thank you page for sending in a topic request.
     *
     * @return View
     */
    public function thanks(): View
    {
        return view('thanks', [
            'title'   => 'Thanks For Requesting A Topic',
            'content' => 'We look forward to seeing you at the meetup!'
        ]);
    }
}
