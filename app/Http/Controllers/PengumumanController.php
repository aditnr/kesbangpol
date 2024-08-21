<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Http\Controllers\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('dashboard.pengumuman.index', ['pengumuman' => $pengumuman]);
    }
    
    public function create()
    {
        return view('dashboard.pengumuman.create');
    }
    
    public function save(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'konten' => 'required',
            'thumbnail' => 'required',
        ]);

        try {
            $data = new Pengumuman;
            $data->judul = $request->judul;
            $data->konten = $request->konten;

            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/pengumuman'), $filename);
                $data->thumbnail = $filename;
            }
            $data->save();

            session()->flash('alert-success', 'Pengumuman berhasil ditambahkan.');
            return redirect('dashboard/pengumuman/'.$data->id);
        } catch (\Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/pengumuman/')->withInput();
        }
    }
    
    public function show($id)
    {
        $data = app('App\Models\Pengumuman')->cariPengumuman($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Pengumuman yang anda cari tidak ditemukan.');
            return redirect('/dashboard/pengumuman');
        }

        return view('dashboard.pengumuman.show', compact(['data']));
    }
    
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'konten' => 'required',
            'thumbnail' => 'required',
        ]);

        $data = Pengumuman::find($id);

        if(empty($data))
        {
            session()->flash('alert-danger', 'Pengumuman yang anda cari tidak ditemukan.');
            return redirect('/dashboard/pengumuman');
        }

        try {
            DB::transaction(function() use ($request,&$data){
                $data->judul = $request->judul;
                $data->konten = $request->konten;

                if ($request->hasFile('thumbnail')) {
                    $file = $request->file('thumbnail');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images/pengumuman'), $filename);
                    $data->thumbnail = $filename;
                }

                $data->save();

                // throw new Exception('coba error.');
            });

            session()->flash('alert-success', 'Pengumuman berhasil diupdate.');
            return redirect('dashboard/pengumuman/'.$data->id);
        } catch (\Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        return redirect('dashboard/pengumuman/'.$data->id)->withInput();
        }
    }
    
    public function delete($id)
    {
        $data = app('App\Models\Pengumuman')->cariPengumuman($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Pengumuman yang anda cari tidak ditemukan.');
            return redirect('/dashboard/pengumuman');
        }

        try {
            DB::transaction(function() use (&$data){
                $data->delete();

                // throw new Exception('Hai ini coba error.');
            });

            Session()->flash('alert-success', 'Pengumuman berhasil dihapus.');
            return redirect('dashboard/pengumuman');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/pengumuman/'.$data->id);
        }
    }   
}