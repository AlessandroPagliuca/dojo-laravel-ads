<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function home()
    {
        $announcement = Announcement::where('status', 'published')->first();

        if (!$announcement) {
            return response()->json([
                'status' => 'error',
                'message' => 'No published announcememts found.',
            ], 404);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'ok',
            'result' => $announcement,
        ], 200);

    }
}