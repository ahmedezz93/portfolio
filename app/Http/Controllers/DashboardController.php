<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/ahmedezz-laravel developer.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return Response::download($file, 'cv.pdf', $headers);
    }}
