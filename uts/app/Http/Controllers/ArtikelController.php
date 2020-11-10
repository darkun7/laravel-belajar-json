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

    public function update_json() {
      $json = $this->read_json();
      
    }

    public function delete_json() {

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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
