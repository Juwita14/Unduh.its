<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fitur;
use App\Models\Persyaratan_sistem;
use App\Models\Software;

class SpesifikasiController extends Controller
{
    public function index()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '1')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '1')->get();
        // dd($persyaratan_sistem);
        return view('admin.spesifikasi', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexLabview()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '4')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '4')->get();
        // dd($persyaratan_sistem);
        return view('admin.labview.spesifikasiLabview', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexMinitab()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '5')->get();
        $persyaratan_sistem = Persyaratan_sistem::where('id_software', '5')->get();
        // dd($persyaratan_sistem);
        return view('admin.minitab.spesifikasiMinitab', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function create()
    {
        return view('admin.createFitur');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 1)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/spesifikasi');
    }

    public function createLabview()
    {
        return view('admin.labview.createFiturLabview');
    }

    public function storeLabview(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 4)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/spesifikasiLabview');
    }

    public function createMinitab()
    {
        return view('admin.minitab.createFiturMinitab');
    }

    public function storeMinitab(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 5)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/spesifikasiMinitab');
    }

    public function edit($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.editFitur', compact(['fitur']));
    }

    public function update($id, Request $request)
    {
        $software = Software::where('id', 1)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/spesifikasi');
    }

    public function editLabview($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.labview.editFiturLabview', compact(['fitur']));
    }

    public function updateLabview($id, Request $request)
    {
        $software = Software::where('id', 4)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/spesifikasiLabview');
    }

    public function editMinitab($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.minitab.editFiturMinitab', compact(['fitur']));
    }

    public function updateMinitab($id, Request $request)
    {
        $software = Software::where('id', 5)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/spesifikasiMinitab');
    }

    public function destroy($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/spesifikasi');
    }

    public function destroyLabview($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/spesifikasiLabview');
    }

    public function destroyMinitab($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/spesifikasiMinitab');
    }

    public function createPS()
    {
        return view('admin.createPersyaratanSistem');
    }

    public function storePS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 1)->value('id');
        Persyaratan_sistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/spesifikasi');
    }

    public function createLabviewPS()
    {
        return view('admin.labview.createPersyaratanSistemLabview');
    }

    public function storeLabviewPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 4)->value('id');
        Persyaratan_sistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/spesifikasiLabview');
    }

    public function createMinitabPS()
    {
        return view('admin.minitab.createPersyaratanSistemMinitab');
    }

    public function storeMinitabPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 5)->value('id');
        Persyaratan_sistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/spesifikasiMinitab');
    }

    public function editPS($id)
    {
        //dd($id);
        $persyaratan_sistem = Persyaratan_sistem::find($id);
        //dd($fitur);
        return view('admin.editPersyaratanSistem', compact(['persyaratan_sistem']));
    }

    public function updatePS($id, Request $request)
    {
        $software = Software::where('id', 1)->value('id');
        Persyaratan_sistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/spesifikasi');
    }

    public function editLabviewPS($id)
    {
        //dd($id);
        $persyaratan_sistem = Persyaratan_sistem::find($id);
        //dd($fitur);
        return view('admin.labview.editPersyaratanSistemLabview', compact(['persyaratan_sistem']));
    }

    public function updateLabviewPS($id, Request $request)
    {
        $software = Software::where('id', 4)->value('id');
        Persyaratan_sistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/spesifikasiLabview');
    }

    public function editMinitabPS($id)
    {
        //dd($id);
        $persyaratan_sistem = Persyaratan_sistem::find($id);
        //dd($fitur);
        return view('admin.minitab.editPersyaratanSistemMinitab', compact(['persyaratan_sistem']));
    }

    public function updateMinitabPS($id, Request $request)
    {
        $software = Software::where('id', 5)->value('id');
        Persyaratan_sistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/spesifikasiMinitab');
    }

    public function destroyPS($id)
    {
        $persyaratan_sistem = Persyaratan_sistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/spesifikasi');
    }

    public function destroyLabviewPS($id)
    {
        $persyaratan_sistem = Persyaratan_sistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/spesifikasiLabview');
    }

    public function destroyMinitabPS($id)
    {
        $persyaratan_sistem = Persyaratan_sistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/spesifikasiMinitab');
    }
}
