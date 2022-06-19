<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Software;
use App\Models\Ringkasan;
use App\Models\Fitur;
use App\Models\Persyaratan_sistem;

class ControllerMinitab extends Controller
{
    public function index()
    {
    	$software = Software::where('id', '5')->get();
        $ringkasan = Ringkasan::where('id_software', '5')->get();
        $fitur = Fitur::where('id_software', '5')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '5')->get();
        //dd($software);
        return view('minitab', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem']));
    }
}
?>