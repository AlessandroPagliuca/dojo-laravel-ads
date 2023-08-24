<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;
use Illuminate\Support\Str;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Created example announcement
        $announcement = config('db.announcements');

        $newAnnouncement = new Announcement();
        $newAnnouncement->title = $announcement['title'];
        $newAnnouncement->slug = Str::slug($announcement['title'], '-');
        $newAnnouncement->duration = $announcement['duration'];
        $newAnnouncement->price = $announcement['price'];
        $newAnnouncement->plan = $announcement['plan'];
        $newAnnouncement->description = $announcement['description'];
        $newAnnouncement->contract = $announcement['contract'];

        $newAnnouncement->save();

    }
}