@extends('layouts.main')

@section('judul', 'Beranda')

@section('isi')
<section id="our-courses" class="white-wrapper">
    <div class="section-inner">
        <div class="container">
            <div class="row mb60 text-center">
                <div class="col-sm-12">
                    <h3 class="section-title">The Kuli</h3>
                    <p class="section-sub-title">Pokok kerjo wes.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="masonry-portfolio row">
                                 <ul class="masonry-portfolio-filter mb40 list-inline wow fadeIn text-center" data-wow-delay="0.2s">
                                    <li><a class="btn btn-primary btn-transparent active" href="#" data-filter="*">All</a></li>
                                    <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".apps">Apps</a></li>
                                    <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".design">Design</a></li>
                                    <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".photography">Photography</a></li>
                                    <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".video">Video</a></li>
                                </ul>

                                <div class="col-sm-12">
                                    <div class="masonry-portfolio-items">
                                        <div class="row">
                                            @foreach($artikel as $konten)
                                            <div class="col-sm-4 masonry-portfolio-item mb30 apps">
                                                <div class="hover-effect smoothie">
                                                    <a href="#" class="smoothie">
                                                    <img src="{{$konten['img']}}" alt="Image" class="img-responsive smoothie" style="min-height:250px"></a>
                                                    <div class="hover-overlay smoothie text-center">
                                                        <div class="vertical-align-bottom">
                                                            <h4>{{ $konten['judul'] }}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="hover-caption dark-overlay smoothie text-center">
                                                        <div class="vertical-align-bottom">
                                                            <a href="{{ route('artikel.show', $konten['id']) }}" class="btn btn-primary mb20">View Details <i class="fa fa-angle-right smoothie"></i></a>
                                                            <a href="{{$konten['img']}}" class="lb-link btn btn-primary mb20">View Image <i class="fa fa-plus smoothie"></i></a>
                                                            <form class="" action="{{ route('artikel.destroy', $konten['id']) }}" method="post">
                                                              @csrf
                                                              @method('delete')
                                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
