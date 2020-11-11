@extends('layouts.main')

@section('isi')
<section id="our-courses" class="white-wrapper">
    <div class="section-inner">
        <div class="container">
          <h2>{{$konten['judul']}}</h2>
          <h6>{{$konten['penulis']}}</h6>
          <p>{!! $konten['konten'] !!}</p>

          <a href="{{ route('artikel.edit', $konten['id']) }}">edit konten</a>
        </div>
    <div>
</section>
@endsection
