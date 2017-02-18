<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Talk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class PastTalksController
 *
 * @package App\Http\Controllers\Admin
 */
class PastTalksController extends Controller
{
    /**
     * PastTalksController constructor.
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays the administration dashboard
     *
     * @return View
     */
    public function index(): View
    {
        $talks = Talk::all();

        return view('admin.talks', [
            'talks' => $talks,
        ]);
    }

    /**
     * Insets the previous talk into the database.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function insert(Request $request): RedirectResponse
    {
        $talk = new Talk();

        $talk->meetup_name        = $request->meetup_name;
        $talk->meetup_link        = $request->meetup_link;
        $talk->slides_link        = $request->slides_link;
        $talk->video_link         = $request->video_link;
        $talk->meetup_description = $request->meetup_description;

        $talk->save();

        return redirect('/admin/past-talks');
    }

    /**
     * Deletes the selected row.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id): RedirectResponse
    {
        Talk::destroy($id);

        return redirect('/admin/past-talks');
    }
}
