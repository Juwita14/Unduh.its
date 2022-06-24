<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Software;
use App\Models\Ringkasan;
use App\Models\Fitur;
use App\Models\Persyaratan_sistem;
use App\Models\File_Panduan;
use App\Models\File_installer;
use App\Models\Preview;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.awal2');
    }

}
