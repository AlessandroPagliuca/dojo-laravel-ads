<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Cookie;

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
    //FUNCTION TO MANAGE THE FRONT-END RECEIVED VIEW
    public function storeView(Request $request)
    {
        // Get the value of the user's cookie
        $value = $request->cookie('name');

        // Retrieves the guest user's cookie value
        $guestCookie = $request->cookie('announcement_id');

        // Save the views in the database
        // Use the create() method of the Cookie model
        Cookie::create([
            'name' => 'value',
            'value' => $value,
        ]);

        // Return an appropriate answer
        return response()->json(['message' => 'View successfully saved.'], 201);
    }
}