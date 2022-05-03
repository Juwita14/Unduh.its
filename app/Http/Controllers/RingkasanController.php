<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Software;
use App\Models\Ringkasan;

class RingkasanController extends Controller
{
    public function index()
    {
    	$software = Software::where('id', '1')->get();
        $ringkasan = Ringkasan::where('id_software', '1')->get();
        //dd($software);
        return view('admin.adobe.ringkasan', compact(['ringkasan', 'software']));
    }

    public function indexMathematica()
    {
    	$software = Software::where('id', '3')->get();
        $ringkasan = Ringkasan::where('id_software', '3')->get();
        //dd($software);
        return view('admin.mathematica.ringkasanMathematica', compact(['ringkasan', 'software']));
    }

    public function indexLabview()
    {
        $software = Software::where('id', '4')->get();
        $ringkasan = Ringkasan::where('id_software', '4')->get();
        //dd($software);
        return view('admin.labview.ringkasanLabview', compact(['ringkasan', 'software']));
    }

    public function indexMinitab()
    {
        $software = Software::where('id', '5')->get();
        $ringkasan = Ringkasan::where('id_software', '5')->get();
        //dd($software);
        return view('admin.minitab.ringkasanMinitab', compact(['ringkasan', 'software']));
    }

    public function create()
    {
        return view('admin.adobe.createRingkasan');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $software = Software::where('id', 1)->value('id');
        Ringkasan::create([
            'id_software' => $software,
            'ringkasan' =>$request->ringkasan
        ]);
        return redirect('/ringkasan');
    }

    public function createMathematica()
    {
        return view('admin.mathematica.createRingkasanMathematica');
    }

    public function storeMathematica(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $software = Software::where('id', 3)->value('id');
        Ringkasan::create([
            'id_software' => $software,
            'ringkasan' =>$request->ringkasan
        ]);
        return redirect('/ringkasanMathematica');
    }

    public function createLabview()
    {
        return view('admin.labview.createRingkasanLabview');
    }

    public function storeLabview(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $software = Software::where('id', 4)->value('id');
        Ringkasan::create([
            'id_software' => $software,
            'ringkasan' =>$request->ringkasan
        ]);
        return redirect('/ringkasanLabview');
    }

    public function createMinitab()
    {
        return view('admin.minitab.createRingkasanMinitab');
    }

    public function storeMinitab(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $software = Software::where('id', 5)->value('id');
        Ringkasan::create([
            'id_software' => $software,
            'ringkasan' =>$request->ringkasan
        ]);
        return redirect('/ringkasanMinitab');
    }

    public function edit($id)
    {
        //dd($id);
        $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        //dd($software);
        return view('admin.adobe.editRingkasan', compact(['ringkasan', 'software']));
    }

    public function update($id, Request $request)
    {
        // $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        $ringkasan->update($request->except(['_token','submit']));
        return redirect('/ringkasan');
    }

    public function editMathematica($id)
    {
        //dd($id);
        $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        //dd($software);
        return view('admin.mathematica.editRingkasanMathematica', compact(['ringkasan', 'software']));
    }

    public function updateMathematica($id, Request $request)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->update($request->except(['_token','submit']));
        return redirect('/ringkasanMathematica');
    }

    public function editLabview($id)
    {
        //dd($id);
        $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        //dd($software);
        return view('admin.labview.editRingkasanLabview', compact(['ringkasan', 'software']));
    }

    public function updateLabview($id, Request $request)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->update($request->except(['_token','submit']));
        return redirect('/ringkasanLabview');
    }

    public function editMinitab($id)
    {
        //dd($id);
        $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        //dd($software);
        return view('admin.minitab.editRingkasanMinitab', compact(['ringkasan', 'software']));
    }

    public function updateMinitab($id, Request $request)
    {
        // $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        $ringkasan->update($request->except(['_token','submit']));
        return redirect('/ringkasanMinitab');
    }

    public function destroy($id)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->delete();
        return redirect('/ringkasan');
    }

    public function destroyMathematica($id)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->delete();
        return redirect('/ringkasanMathematica');
    }

    public function destroyLabview($id)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->delete();
        return redirect('/ringkasanLabview');
    }

    public function destroyMinitab($id)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->delete();
        return redirect('/ringkasanMinitab');
    }
}
