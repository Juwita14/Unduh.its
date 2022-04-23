<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMinitab extends Controller
{
    public function Minitab(){
        return view('minitab');
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/assets/media/file/test.pdf";

        $headers = array(
                'Content-Type: application/pdf',
                );

                return response()->download($file, 'filename.pdf', $headers);
    }
}
?>