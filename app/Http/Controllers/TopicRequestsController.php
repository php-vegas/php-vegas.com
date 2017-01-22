<?php

namespace App\Http\Controllers;

use App\Mail\TopicRequested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TopicRequestsController extends Controller
{
    /**
     * TopicRequestsController constructor.
     */
    public function __construct()
    {
    }

    /**
     * Returns the view for the request form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('requests');
    }

    /**
     * Sends an email and then redirects you to the thank you page.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function insert(Request $request)
    {
        Mail::to(getenv('MAIL_TO'))->send(new TopicRequested($request));

        return redirect('/out-sponsors/sponsorship-information');
    }

    /**
     * Displays the thank you page for sending in a topic request.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function thanks()
    {
        return view('thanks', [
            'title'   => 'Thanks For Requesting A Topic',
            'content' => 'We look forward to seeing you at the meetup!'
        ]);
    }
}
