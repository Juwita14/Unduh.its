<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Preview;
use App\Models\Software;

class PreviewController extends Controller
{
    public function index()
    {
        $preview = Preview::where('id_software', '1')->get();
        return view('admin.preview', compact(['preview']));
    }

    public function indexLabview()
    {
        $preview = Preview::where('id_software', '4')->get();
        return view('admin.labview.previewLabview', compact(['preview']));
    }

    public function indexMinitab()
    {
        $preview = Preview::where('id_software', '5')->get();
        return view('admin.minitab.previewMinitab', compact(['preview']));
    }

    public function create()
    {
        return view('admin.createPreview');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/preview';
        $software = Software::where('id', 1)->value('id');
        Preview::create([
            'id_software' => $software,
            'nama_gambar' =>$request->nama_gambar,
            'namaFiles' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile); 
        return redirect('/preview');
    }

    public function createLabview()
    {
        return view('admin.labview.createPreviewLabview');
    }

    public function storeLabview(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/preview';
        $software = Software::where('id', 4)->value('id');
        Preview::create([
            'id_software' => $software,
            'nama_gambar' =>$request->nama_gambar,
            'namaFiles' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile); 
        return redirect('/previewLabview');
    }

    public function createMinitab()
    {
        return view('admin.minitab.createPreviewMinitab');
    }

    public function storeMinitab(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/preview';
        $software = Software::where('id', 5)->value('id');
        Preview::create([
            'id_software' => $software,
            'nama_gambar' =>$request->nama_gambar,
            'namaFiles' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile); 
        return redirect('/previewMinitab');
    }

    public function edit($id)
    {
        //dd($id);
        $preview = Preview::find($id);
        //dd($fitur);
        return view('admin.editPreview', compact(['preview']));
    }

    public function update($id, Request $request)
    {
        $ubah = Preview::findorfail($id);
        $awal = $ubah->namaFiles;
        
        $destinationPath = 'assets/media/preview';
        $software = Software::where('id', 1)->value('id');
        Preview::where('id', $id)
        ->update([
            'nama_gambar' =>$request->nama_gambar,
            'namaFiles' =>$awal
        ]);

        $request->namaFiles->move($destinationPath, $awal); 
        return redirect('/preview');
    }

    public function editLabview($id)
    {
        //dd($id);
        $preview = Preview::find($id);
        //dd($fitur);
        return view('admin.labview.editPreviewLabview', compact(['preview']));
    }

    public function updateLabview($id, Request $request)
    {
        $ubah = Preview::findorfail($id);
        $awal = $ubah->namaFiles;
        
        $destinationPath = 'assets/media/preview';
        $software = Software::where('id', 4)->value('id');
        Preview::where('id', $id)
        ->update([
            'nama_gambar' =>$request->nama_gambar,
            'namaFiles' =>$awal
        ]);

        $request->namaFiles->move($destinationPath, $awal); 
        return redirect('/previewLabview');
    }

    public function editMinitab($id)
    {
        //dd($id);
        $preview = Preview::find($id);
        //dd($fitur);
        return view('admin.minitab.editPreviewMinitab', compact(['preview']));
    }

    public function updateMinitab($id, Request $request)
    {
        $ubah = Preview::findorfail($id);
        $awal = $ubah->namaFiles;
        
        $destinationPath = 'assets/media/preview';
        $software = Software::where('id', 1)->value('id');
        Preview::where('id', $id)
        ->update([
            'nama_gambar' =>$request->nama_gambar,
            'namaFiles' =>$awal
        ]);

        $request->namaFiles->move($destinationPath, $awal); 
        return redirect('/previewMinitab');
    }

    public function destroy($id)
    {
        $preview = Preview::find($id);
        $preview->delete();
        return redirect('/preview');
    }

    public function destroyLabview($id)
    {
        $preview = Preview::find($id);
        $preview->delete();
        return redirect('/previewLabview');
    }

    public function destroyMinitab($id)
    {
        $preview = Preview::find($id);
        $preview->delete();
        return redirect('/previewMinitab');
    }
}
