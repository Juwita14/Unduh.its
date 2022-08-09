<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FilePanduan;
use App\Models\FileInstaller;
use App\Models\Software;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileDownloadController extends Controller
{
    public function index()
    {
        $file_panduan = FilePanduan::where('id_software', '1')->get();
        $file_installer = FileInstaller::where('id_software', '1')->get();
        return view('admin.adobe.filedownload', compact(['file_panduan', 'file_installer']));
    }

    public function indexMatlab()
    {
        $file_panduan = FilePanduan::where('id_software', '2')->get();
        return view('admin.matlab.filedownloadMatlab', compact(['file_panduan']));
    }

    public function indexMathematica()
    {
        $file_panduan = FilePanduan::where('id_software', '3')->get();
        $file_installer = FileInstaller::where('id_software', '3')->get();
        return view('admin.mathematica.filedownloadMathematca', compact(['file_panduan', 'file_installer']));
    }

    public function indexLabview()
    {
        $file_panduan = FilePanduan::where('id_software', '4')->get();
        $file_installer = FileInstaller::where('id_software', '4')->get();
        return view('admin.labview.filedownloadLabview', compact(['file_panduan', 'file_installer']));
    }

    public function indexMinitab()
    {
        $file_panduan = FilePanduan::where('id_software', '5')->get();
        $file_installer = FileInstaller::where('id_software', '5')->get();
        return view('admin.minitab.filedownloadMinitab', compact(['file_panduan', 'file_installer']));
    }

    public function create()
    {
        return view('admin.adobe.createFilePanduan');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/filepanduan';
        $software = Software::where('id', 1)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFiles' =>$namaFile,
            'namapanduan' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/adobe/filedownload');
    }

    public function createMatlab()
    {
        return view('admin.matlab.createFilePanduanMatlab');
    }

    public function storeMatlab(Request $request)
    {
        $software = Software::where('id', 2)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFIles' =>$request->namaFIles,
            'namapanduan' =>$request->namaFiles
        ]);
        return redirect('/admin/matlab/filedownloadMatlab');
    }

    public function createMathematica()
    {
        return view('admin.mathematica.createFilePanduanMathematica');
    }

    public function storeMathematica(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/filepanduan';
        $software = Software::where('id', 3)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFiles' =>$namaFile,
            'namapanduan' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function createLabview()
    {
        return view('admin.labview.createFilePanduanLabview');
    }

    public function storeLabview(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/filepanduan';
        $software = Software::where('id', 4)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFiles' =>$namaFile,
            'namapanduan' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function createMinitab()
    {
        return view('admin.minitab.createFilePanduanMinitab');
    }

    public function storeMinitab(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->namaFiles;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/filepanduan';
        $software = Software::where('id', 5)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFiles' =>$namaFile,
            'namapanduan' =>$namaFile
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function createMathematicaFI()
    {
        return view('admin.mathematica.createFileInstallerMathematica');
    }

    public function storeMathematicaFI(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->file_download;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/fileinstaller';
        $software = Software::where('id', 3)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$namaFile,
            'size' =>$request->size
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function createLabviewFI()
    {
        return view('admin.labview.createFileInstallerLabview');
    }

    public function storeLabviewFI(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->file_download;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/fileinstaller';
        $software = Software::where('id', 4)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$namaFile,
            'size' =>$request->size
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function createMinitabFI()
    {
        return view('admin.minitab.createFileInstallerMinitab');
    }

    public function storeMinitabFI(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $namaFiles = $request->file_download;
        $namaFile = $namaFiles-> getClientOriginalName();
        $destinationPath = 'assets/media/fileinstaller';
        $software = Software::where('id', 5)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$namaFile,
            'size' =>$request->size
        ]);

        $namaFiles->move($destinationPath, $namaFile);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function edit($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.adobe.editFilePanduan', compact(['file_panduan']));
    }

    public function update($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        $path = public_path("assets/media/filepanduan/");
        $pathfilelama = public_path("assets/media/filepanduan/{$namaFile}");
        // dd($path);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->namapanduan;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 1)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$namapanduanbaru
        ]);
        return redirect('/admin/adobe/filedownload');
    }

    public function editMatlab($id)
    {
        $file_panduan = FilePanduan::find($id);
        return view('admin.matlab.editFilePanduanMatlab', compact(['file_panduan']));
    }

    public function updateMatlab($id, Request $request)
    {
        $file_panduan = FilePanduan::where('id', 2)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$request->namapanduan,
            'namaFIles' =>$request->namapanduan
        ]);
        return redirect('/admin/matlab/filedownloadMatlab');
    }

    public function editMathematica($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.mathematica.editFilePanduanMathematica', compact(['file_panduan']));
    }

    public function updateMathematica($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        $path = public_path("assets/media/filepanduan/");
        $pathfilelama = public_path("assets/media/filepanduan/{$namaFile}");
        // dd($path);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->namapanduan;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 3)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$namapanduanbaru
        ]);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function editLabview($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.labview.editFilePanduanLabview', compact(['file_panduan']));
    }

    public function updateLabview($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        $path = public_path("assets/media/filepanduan/");
        $pathfilelama = public_path("assets/media/filepanduan/{$namaFile}");
        // dd($path);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->namapanduan;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 4)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$namapanduanbaru
        ]);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function editMinitab($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.minitab.editFilePanduanMinitab', compact(['file_panduan']));
    }

    public function updateMinitab($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        $path = public_path("assets/media/filepanduan/");
        $pathfilelama = public_path("assets/media/filepanduan/{$namaFile}");
        // dd($path);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->namapanduan;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 5)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$namapanduanbaru
        ]);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function editMathematicaFI($id)
    {
        //dd($id);
        $file_installer = FileInstaller::find($id);
        //dd($fitur);
        return view('admin.mathematica.editFileInstallerMathematica', compact(['file_installer']));
    }

    public function updateMathematicaFI($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_installer = FileInstaller::find($id);
        $namaFile=$file_installer->file_download;
        $path = public_path("assets/media/fileinstaller/");
        $pathfilelama = public_path("assets/media/fileinstaller/{$namaFile}");
        // dd($pathfilelama);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->file_download;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 3)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$namapanduanbaru,
            'size' => $request->size
        ]);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function editLabviewFI($id)
    {
        //dd($id);
        $file_installer = FileInstaller::find($id);
        //dd($fitur);
        return view('admin.labview.editFileInstallerLabview', compact(['file_installer']));
    }

    public function updateLabviewFI($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_installer = FileInstaller::find($id);
        $namaFile=$file_installer->file_download;
        $path = public_path("assets/media/fileinstaller/");
        $pathfilelama = public_path("assets/media/fileinstaller/{$namaFile}");
        // dd($pathfilelama);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->file_download;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 4)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$namapanduanbaru,
            'size' => $request->size
        ]);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function editMinitabFI($id)
    {
        //dd($id);
        $file_installer = FileInstaller::find($id);
        //dd($fitur);
        return view('admin.minitab.editFileInstallerMinitab', compact(['file_installer']));
    }

    public function updateMinitabFI($id, Request $request)
    {
        // dd($request->except(['_token','submit']));
        $file_installer = FileInstaller::find($id);
        $namaFile=$file_installer->file_download;
        $path = public_path("assets/media/fileinstaller/");
        $pathfilelama = public_path("assets/media/fileinstaller/{$namaFile}");
        // dd($pathfilelama);
        $isExists = file_exists($pathfilelama);
        unlink($pathfilelama);

        $panduanbaru = $request->file_download;
        $namapanduanbaru = $panduanbaru->getClientOriginalName();
        // dd($namapanduanbaru);
        $panduanbaru->move($path, $namapanduanbaru);

        $software = Software::where('id', 5)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$namapanduanbaru,
            'size' => $request->size
        ]);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function destroy($id)
    {
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;

        $path = public_path("assets/media/filepanduan/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_panduan->delete();
        return redirect('/admin/adobe/filedownload');
    }

    public function destroyMatlab($id)
    {
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;

        $path = public_path("assets/media/filepanduan/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_panduan->delete();
        return redirect('/admin/matlab/filedownloadMatlab');
    }

    public function destroyMathematica($id)
    {
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        // dd($namaFile);
        $path = public_path("assets/media/filepanduan/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_panduan->delete();
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function destroyLabview($id)
    {
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        // dd($namaFile);
        $path = public_path("assets/media/filepanduan/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_panduan->delete();
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function destroyMinitab($id)
    {
        $file_panduan = FilePanduan::find($id);
        $namaFile=$file_panduan->namapanduan;
        // dd($namaFile);
        $path = public_path("assets/media/filepanduan/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_panduan->delete();
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function destroyMathematicaFI($id)
    {
        $file_installer = File_Installer::find($id);
        $namaFile=$file_installer->file_download;
        // dd($namaFile);
        $path = public_path("assets/media/fileinstaller/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_installer->delete();
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function destroyLabviewFI($id)
    {
        $file_installer = File_Installer::find($id);
        $namaFile=$file_installer->file_download;
        // dd($namaFile);
        $path = public_path("assets/media/fileinstaller/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_installer->delete();
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function destroyMinitabFI($id)
    {
        $file_installer = File_Installer::find($id);
        $namaFile=$file_installer->file_download;
        // dd($namaFile);
        $path = public_path("assets/media/fileinstaller/{$namaFile}");

        $isExists = file_exists($path);

        // dd($isExists);
        unlink($path);
        $file_installer->delete();
        return redirect('/admin/minitab/filedownloadMinitab');
    }
}
