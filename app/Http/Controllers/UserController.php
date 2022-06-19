<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Software;
use App\Models\Ringkasan;
use App\Models\Fitur;
use App\Models\Persyaratan_sistem;
use App\Models\File_Panduan;
use App\Models\File_installer;

class UserController extends Controller
{
    public function index()
    {
        return view('index1');
    }
    
    public function indexMathematica()
    {
    	$software = Software::where('id', '3')->get();
        $ringkasan = Ringkasan::where('id_software', '3')->get();
        $fitur = Fitur::where('id_software', '3')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '3')->get();
        $file_panduan = File_panduan::where('id_software', '3')->get();
        $file_installer = File_installer::where('id_software', '3')->get();

        return view('mathematica', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer']));
    }
    public function indexLabview()
    {
    	$software = Software::where('id', '4')->get();
        $ringkasan = Ringkasan::where('id_software', '4')->get();
        $fitur = Fitur::where('id_software', '4')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '4')->get();
        $file_panduan = File_panduan::where('id_software', '4')->get();
        $file_installer = File_installer::where('id_software', '4')->get();
        
        return view('labview', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer']));
    }

    public function indexMinitab()
    {
    	$software = Software::where('id', '5')->get();
        $ringkasan = Ringkasan::where('id_software', '5')->get();
        $fitur = Fitur::where('id_software', '5')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '5')->get();
        $file_panduan = File_panduan::where('id_software', '5')->get();
        $file_installer = File_installer::where('id_software', '5')->get();
        
        return view('minitab', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer']));
    }

    public function getDownloadPanduan($id)
    {
        $file_panduan = File_panduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        $file= public_path("assets/media/filepanduan/{$namaFile}");
       
        return response()->download($file);
    }

    public function getDownloadInstaller($id)
    {
        $file_installer = File_installer::find($id);
        $namaFile = $file_installer->file_download;
        $file= public_path("assets/media/fileinstaller/{$namaFile}");
       
        return response()->download($file);
    }

}
