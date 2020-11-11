<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage as S;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    // public $url = 'artikel.json';
    public $url = "../storage/artikel.json";

    public function read_json() {
      // $url = S::url('/'.$this->url);
      // $konten = file_get_contents($url);
      $konten = file_get_contents($this->url);
      $array  = json_decode($konten, true);
      return $array;
    }

    public function find_json($id) {
      $json = $this->read_json();
      $antrian = -1;
      foreach ($json as $key => $value) {
          if( $value['id'] == $id ) {
            $antrian = $key;
          }
      }
      if($json == null || $antrian < 0){
        return null;
      }
      return $json[$antrian];
    }

    public function write_json(Request $request) {
       $json = $this->read_json();
       $konten = array (
             'id'           => count($json)+1,
             'judul'        => $request->judul,
             'penulis'      => $request->penulis,
             'img'          => $request->img,
             'konten'       => $request->konten,
             'created'      => date('d-m-Y'),
             'updated'      => null
         );
       $json[] = $konten;
       $json = json_encode($json, JSON_PRETTY_PRINT);
       if( file_put_contents($this->url, $json) ) {
           return true;
       }
       return false;
    }

    public function update_json(Request $request, $id) {
      $json = $this->read_json();
      $data_lama = $this->find_json($id);
      $antrian = -1;
      foreach ($json as $key => $value) {
          if( $value['id'] == $id ) {
            $antrian = $key;
          }
      }
      if($data_lama == null || $antrian < 0){
        return false;
      }
      $json[$antrian]['judul']   = $request->judul;
      $json[$antrian]['penulis'] = $request->penulis;
      $json[$antrian]['img']     = $request->img;
      $json[$antrian]['konten'] = $request->konten;
      $json[$antrian]['updated'] = date('d-m-Y');
      // dd($json[$antrian]);
      $varbaru = $json;
      $json = json_encode($varbaru, JSON_PRETTY_PRINT);
      if( file_put_contents($this->url, $json) ) {
          return true;
      }
      return false;
    }

    public function delete_json(Request $request, $id) {
      $json = $this->read_json();
      $data_lama = $this->find_json($id);
      $antrian = -1;
      foreach ($json as $key => $value) {
          if( $value['id'] == $id ) {
            $antrian = $key;
          }
      }
      if($data_lama == null || $antrian < 0){
        return false;
      }
      unset($json[$antrian]);
      $varbaru = $json;
      $json = json_encode($varbaru, JSON_PRETTY_PRINT);
      if( file_put_contents($this->url, $json) ) {
          return true;
      }
      return false;
    }

    public function index()
    {
        $array = $this->read_json();
        return view('index', ['artikel' => $array]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if($this->write_json($request)){
            return redirect()->route('index');
        }
        return redirect()->route('index');
    }

    public function show($id)
    {
        $konten = $this->find_json($id);
        return view('show', ['konten' => $konten]);
    }

    public function edit($id)
    {
        $konten = $this->find_json($id);
        return view('edit', ['konten' => $konten]);
    }

    public function update(Request $request, $id)
    {
        if($this->update_json($request, $id)){
            return redirect()->route('index');
        }
        return "Gagal";
    }

    public function destroy(Request $request, $id)
    {
        if($this->delete_json($request, $id)){
            return redirect()->route('index');
        }
        return "Gagal";
    }
}
