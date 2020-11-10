<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon-180x180.png') }}" />

    <title>@yield('judul') | HARTicle</title>
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100,700,300|Nothing+You+Could+Do' rel='stylesheet' type='text/css'>

    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pe-icons/css/pe-icon-7-stroke.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">

</head>
<body class="top-navigation pushy-right-side">

    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <div class="" id="master-wrapper">
      <div class="preloader">
          <div class="preloader-img">
              <span class="loading-animation animate-flicker"><img src="assets/images/loading.gif" alt="loading" /></span>
          </div>
      </div>

      <div id="top-bar" class="hidden-xs">
          <div class="container">
              <div class="col-sm-4">
                  <ul class="header-social list-inline">
                      <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                      <li><a class="blog" href="#"><i class="fa fa-rss"></i></a></li>
                      <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
              </div>
              <div class="col-sm-8">
                  <ul class="secondary-menu list-inline pull-right">
                      <li><a href="{{ route('index') }}">Beranda</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#createModal">Tambah Artikel</a></li>
                      <!-- <li><a href="#">Motors</a></li> -->
                  </ul>
              </div>
          </div>
      </div>

      <!-- MODAL CREATE -->
      <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
            </div>
            <div class="modal-body">
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
                  <input id="img" type="text" name="img" class="form-control" placeholder="URL Penulis">
                </div>
                <div class="form-group">
                  <label for="konten">Konten Artikel</label>
                  <textarea id="konten" name="konten" name="konten" rows="8" cols="80"></textarea>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Posting</button>
            </form>
            </div>
          </div>
        </div>
      </div>


      @yield('isi')


      <footer id="footer-wrapper" class="dark-wrapper">
          <div class="container">
              <div class="row mb90">
                  <div class="col-md-3 col-xs-6">
                      <div class="text-widget widget">
                          <div class="widget-content">
                              <img alt="" class="img-responsive" src="assets/images/logo-light.png">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="text-widget widget">
                          <h4 class="widget-title mb40">Location</h4>
                          <div class="widget-content">
                              <p>Conveniently enhance high-quality imperatives vis-a-vis team driven technologies. Intrinsicly fashion economically sound communities rather than principle-centered deliverables. Synergistically impact.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="useful-link-widget widget">
                          <h4 class="widget-title mb40">Pages</h4>
                          <div class="widget-content">
                              <div class="useful-link-list">
                                  <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                          <ul class="list-unstyled">
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Teachers</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Courses</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Support</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Why Scholar</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Social Media</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Site Map</a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                          <ul class="list-unstyled">
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Company</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Latest Courses</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Partners</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Blog Post</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Help Topic</a>
                                              </li>
                                              <li>
                                                  <i class="fa fa-angle-right"></i><a href="#">Policies</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mailing-widget widget">
                          <h4 class="widget-title mb40">Mailing List</h4>
                          <div class="content-wiget">
                              <p class="mb40">Subscribe to our newsletter for the latest updates and offers.</p>
                              <form action="index.html">
                                  <div class="input-group">
                                      <input class="form-control form-email-widget" placeholder="Email address" type="text"><span class="input-group-btn"><input class="btn btn-email" type="submit" value="✓"></span>
                                  </div>
                              </form>
                              <p></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row sub-footer">
                  <div class="col-md-6 footer-social">
                      <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                      <a class="blog" href="#"><i class="fa fa-rss"></i></a>
                      <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                  </div>
                  <div class="col-md-6 text-right">
                      <p class="copyright"><small>© {{date('Y')}} <a href="https://github.com/darkun7">Darkun7</a> . Designed by <a href="http://www.distinctivethemes.com" target="_blank">Distinctive Themes</a></small></p>
                  </div>
              </div>
          </div>
      </footer>

      <a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('assets/js/init.js') }}"></script>

</body>
</html>
