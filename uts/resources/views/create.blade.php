@extends('layouts.main')

@section('isi')
<section id="our-courses" class="white-wrapper">
    <div class="section-inner">
        <div class="container">
          <form action="{{ route('artikel.store' )}}" method="post" autocomplete="off" >
            @csrf
            <div class="form-group">
              <label for="judul">Judul</label>
              <input id="judul" type="text" name="judul" class="form-control" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
              <label for="penulis">Penulis</label>
              <input id="penulis" type="text" name="penulis" class="form-control" placeholder="Nama Penulis">
            </div>
            <div class="form-group">
              <label for="image">URL Gambar</label>
              <input id="img" type="text" name="img" class="form-control" placeholder="URL gambar">
            </div>
            <div class="form-group">
              <label for="konten">Konten Artikel</label>
              <textarea id="konten" name="name" name="konten" rows="8" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Posting</button>
          </form>
        </div>
        </div>
  </div>
</section>
@endsection
