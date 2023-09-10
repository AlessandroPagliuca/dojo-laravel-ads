<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Cookie;

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
    //FUNCTION TO MANAGE THE FRONT-END RECEIVED COOKIES
    public function cookies(Request $request)
    {
        $name = $request->cookie('name_cookie');
        $value = $request->cookie('value');
        $announcementId = $request->input('announcement_id');

        // Verifica se i dati richiesti sono presenti
        if (empty($name) || empty($value) || empty($announcementId)) {
            return response()->json(['error' => 'Missing or invalid data'], 400);
        }

        // Altre verifiche sui dati, ad esempio la validità dell'announcementId

        // Esegui il salvataggio solo se i dati sono validi
        Cookie::create([
            'name' => $name,
            'value' => $value,
            'announcement_id' => $announcementId,
        ]);

        // Restituisci una risposta di successo
        return response()->json(['message' => 'View successfully saved.'], 201);
    }

}