<?php

namespace App\Http\Controllers;

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
        $file= public_path(). "/dinner/carte_arcoch_V3.pdf";
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'carte_arcoch_V3.pdf', $headers);
    }
}
