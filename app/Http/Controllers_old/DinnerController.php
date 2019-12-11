<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinnerController extends Controller
{
    public function dinner()
    {
        /* Affichage du template restaurant */
        return view('dinner')->with(array(
        ));
    }

    public function getCard()
    {
        $file= public_path(). "/dinner/carte_arcoch.pdf";
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'carte_arcoch.pdf', $headers);
    }
}
