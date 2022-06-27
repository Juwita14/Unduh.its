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
use App\Models\Preview;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\StreamedResponse;

use File;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('index1');
    // }

    public function indexPreview()
    {
        $preview = Preview::where('id_software', '1')->get();

        return view('preVieww', compact([ 'preview']));
    }

    public function indexAdobe()
    {
    	$software = Software::where('id', '1')->get();
        $ringkasan = Ringkasan::where('id_software', '1')->get();
        $fitur = Fitur::where('id_software', '1')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '1')->get();
        $file_panduan = File_panduan::where('id_software', '1')->get();
        // dd($file_panduan);
        $file_installer = File_installer::where('id_software', '1')->get();
        $preview = Preview::where('id_software', '1')->get();

        return view('adobe', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function indexMatlab()
    {
    	$software = Software::where('id', '2')->get();
        $ringkasan = Ringkasan::where('id_software', '2')->get();
        $fitur = Fitur::where('id_software', '2')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '2')->get();
        $file_panduan = File_panduan::where('id_software', '2')->get();
        // dd($file_panduan);
        $file_installer = File_installer::where('id_software', '2')->get();
        $preview = Preview::where('id_software', '2')->get();

        return view('matlab', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }
    
    public function indexMathematica()
    {
    	$software = Software::where('id', '3')->get();
        $ringkasan = Ringkasan::where('id_software', '3')->get();
        $fitur = Fitur::where('id_software', '3')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '3')->get();
        $file_panduan = File_panduan::where('id_software', '3')->get();
        // dd($file_panduan);
        $file_installer = File_installer::where('id_software', '3')->get();
        $preview = Preview::where('id_software', '3')->get();

        return view('mathematica', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }
    public function indexLabview()
    {
    	$software = Software::where('id', '4')->get();
        $ringkasan = Ringkasan::where('id_software', '4')->get();
        $fitur = Fitur::where('id_software', '4')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '4')->get();
        $file_panduan = File_panduan::where('id_software', '4')->get();
        $file_installer = File_installer::where('id_software', '4')->get();
        $preview = Preview::where('id_software', '4')->get();
        
        return view('labview', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function indexMinitab()
    {
    	$software = Software::where('id', '5')->get();
        $ringkasan = Ringkasan::where('id_software', '5')->get();
        $fitur = Fitur::where('id_software', '5')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '5')->get();
        $file_panduan = File_panduan::where('id_software', '5')->get();
        $file_installer = File_installer::where('id_software', '5')->get();
        $preview = Preview::where('id_software', '5')->get();
        
        return view('minitab', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function getDownloadPanduan($id)
    {
        $file_panduan = File_panduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        $file= public_path("assets/media/filepanduan/{$namaFile}");
       
        return response()->download($file);
    }

    static function getMimeType($fileName)
    {
        $mime = null;
        // Try fileinfo first
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            if ($finfo !== false) {
                $mime = finfo_file($finfo, $fileName);
                finfo_close($finfo);
            }
        }
        // Fallback to mime_content_type() if finfo didn't work
        if (is_null($mime) && function_exists('mime_content_type')) {
            $mime = mime_content_type($fileName);
        }
        // Final fallback, detection based on extension
        if (is_null($mime)) {
            $extension = self::getTypeIcon(getTypeIcon);
            if (array_key_exists($extension, self::$mimeMap)) {
                $mime = self::$mimeMap[$extension];
            } else {
                $mime = "application/octet-stream";
            }
        }
        return $mime;
    }

    public function getDownloadInstaller($id, $route, $name = null, array $headers = [], $disposition = 'inline')
    {
        $sessionhas=session()->has('login_session');
        // dd($sessionhas);
        // if($sessionhas == true){
            $file_installer = File_installer::find($id);
            $filename = $file_installer->file_download;
            $path= public_path("assets/media/fileinstaller/{$filename}");

            $response = new StreamedResponse;
            $disposition = $response->headers->makeDisposition(
                $disposition, $filename
            );

            $fileSize = File::size($path);
            $response->headers->replace($headers + [
                'Content-Type' => $this->getMimeType($path),
                'Content-Length' => $fileSize,
                'Content-Disposition' => $disposition,
            ]);
            
            $response->setCallback(function () use ($path) {
                $stream = fopen($path, 'r');
                while (! feof($stream)) {
                    echo fread($stream, 2048);
                }
                dd($stream);
                fclose($stream);
            });

            return $response;
        // }
        // else{
        //     return redirect('login');
        // }
        // Session::flash('login_session', $filename);

        // return Redirect::to($route);
    }

}
