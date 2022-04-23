<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Software;

class RingkasanController extends Controller
{
    public function index()
    {
    	$software = Software::all();
        //dd($software);
        return view('admin.ringkasan', compact(['software']));
    }

    public function create()
    {
        return view('admin.createRingkasan');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Software::create($request->except(['_token','submit']));
        return redirect('/ringkasan');
    }

    public function edit($id)
    {
        //dd($id);
        $software = Software::find($id);
        //dd($software);
        return view('admin.editRingkasan', compact(['software']));
    }

    public function update($id, Request $request)
    {
        $software = Software::find($id);
        $software->update($request->except(['_token','submit']));
        return redirect('/ringkasan');
    }

    public function destroy($id)
    {
        $software = Software::find($id);
        $software->delete();
        return redirect('/ringkasan');
    }
}
