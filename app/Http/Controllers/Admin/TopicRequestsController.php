<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class TopicRequestsController
 *
 * @package App\Http\Controllers\Admin
 */
class TopicRequestsController extends Controller
{
    /**
     * TopicRequestsController constructor.
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exports the topic requests from the database
     *
     * @return StreamedResponse
     */
    public function export(): StreamedResponse
    {
        $requests   = Request::all();
        $streamFunc = function () use ($requests) {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, [
                'First Name',
                'Last Name',
                'Phone Number',
                'Email Address',
                'Topic Request',
            ]);

            foreach ($requests as $request) {
                fputcsv($handle, [
                    $request->first_name,
                    $request->last_name,
                    $request->phone_number,
                    $request->email_address,
                    $request->topic_request,
                ]);
            }

            fclose($handle);
        };

        return response()->stream($streamFunc, 200, [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Content-type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename=topic-requests-' . time() . '.csv',
            'Expires'             => '0',
            'Pragma'              => 'public'
        ]);
    }
}
