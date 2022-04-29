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
        return view('admin.ringkasan', compact(['ringkasan', 'software']));
    }

    public function indexLabview()
    {
        $software = Software::where('id', '4')->get();
        $ringkasan = Ringkasan::where('id_software', '4')->get();
        //dd($software);
        return view('admin.labview.ringkasanLabview', compact(['ringkasan', 'software']));
    }

    public function create()
    {
        return view('admin.createRingkasan');
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

    public function edit($id)
    {
        //dd($id);
        $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        //dd($software);
        return view('admin.editRingkasan', compact(['ringkasan', 'software']));
    }

    public function update($id, Request $request)
    {
        // $software = Software::find($id);
        $ringkasan = Ringkasan::find($id);
        $ringkasan->update($request->except(['_token','submit']));
        return redirect('/ringkasan');
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

    public function destroy($id)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->delete();
        return redirect('/ringkasan');
    }

    public function destroyLabview($id)
    {
        $ringkasan = Ringkasan::find($id);
        $ringkasan->delete();
        return redirect('/ringkasanLabview');
    }
}
