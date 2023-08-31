<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use Illuminate\Support\Facades\Cookie;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $announcements = Announcement::first();
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnouncementRequest  $request
     */
    public function store(StoreAnnouncementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     */
    public function show(Announcement $announcement)
    {
        return view('admin.announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnouncementRequest  $request
     * @param  \App\Models\Announcement  $announcement
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
    public function cookie($slug)
    {
        //Retrieve the annoucement from the database using the slug
        $annoucement = Announcement::where('slug', $slug)->firstOrFail();
        //Retrieve the annoucement view using cookie
        $guestCookie = Cookie::get('value');
        return view('admin.announcements.cookie', compact('annoucement', 'guestCookie'));
    }
}