<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Aplikasi Absensi Pegawai Kabupaten Soppeng">
    <meta name="author" content="CV.Dianra">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kost Athirah') }}</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon2.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon2.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">--}}
    <!-- Katniss CSS -->
    <link href="{{ asset('css/katniss.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body class="hide-left">
<!-- ##### HEAD PANEL ##### -->
<div class="kt-headpanel">
    <div class="kt-headpanel-left">
        <a href="/" class="text-warning">
            <img src="{{ asset('img/pd-logo8.png') }}" class="wd-250" alt="Image">
            {{--<span class="tx-20 tx-white mg-l-10">--}}
                {{--<strong>{{ ucfirst(config('app.name', 'Kost Athirah')) }}</strong>--}}
            {{--</span>--}}
        </a>
    </div><!-- kt-headpanel-left -->
    @if (Route::has('login'))
        <div class="kt-headpanel-right">
            @auth
                <a href="{{ route('login') }}" class="nav-link nav-link-profile">
                    <div>Go To Dashboard</div>
                </a>
            @else
                <a href="{{ route('login') }}" class="nav-link pd-x-7 pos-relative">
                    <div>Login</div>
                </a>
                <a href="{{ route('register') }}" class="nav-link pd-x-7 pos-relative">
                    <div>Register</div>
                </a>
            @endauth
        </div>
    @endif
</div><!-- kt-headpanel -->

<!-- ##### MAIN PANEL ##### -->
<div class="kt-mainpanel" style="padding-top: 60px;padding-right: 50px;padding-left: 50px;">
    <div class="kt-pagebody">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-8">
                <div class="card bd-gray-200">
                    <div class="card-header bg-black-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-info tx-white">Unit Kerja</span>
                                    <select class="form-control select2 select2-show-search" data-placeholder="-- Pilih Unit Kerja --">
                                        <option label="-- Pilih Unit Kerja --"></option>
                                        <option value="Firefox">Firefox</option>
                                        <option value="Chrome">Chrome</option>
                                        <option value="Safari">Safari</option>
                                        <option value="Opera">Opera</option>
                                        <option value="Internet Explorer">Internet Explorer</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-info tx-white">Cari Pegawai</span>
                                    <input type="text" class="form-control" placeholder="Cari data pegawai">
                                </div>
                            </div>
                        </div>
                    </div><!-- card-header -->
                    <div class="table-responsive">
                        <table class="table table-white mg-b-0 tx-12">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Nama Pegawai</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="{{ asset('img/img1.jpg') }}" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                                    <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td class="tx-12">
                                    <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                                </td>
                                <td>Just Now</td>
                                <td>Just Now</td>
                            </tr>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="{{ asset('img/img2.jpg') }}" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
                                    <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td class="tx-12">
                                    <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                                </td>
                                <td>Apr 21, 2017 8:34am</td>
                                <td>Apr 21, 2017 8:34am</td>
                            </tr>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="{{ asset('img/img3.jpg') }}" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                                    <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td class="tx-12">
                                    <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                                </td>
                                <td>Apr 10, 2017 4:40pm</td>
                                <td>Apr 10, 2017 4:40pm</td>
                            </tr>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="{{ asset('img/img5.jpg') }}" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
                                    <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td class="tx-12">
                                    <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                                </td>
                                <td>Apr 02, 2017 6:45pm</td>
                                <td>Apr 02, 2017 6:45pm</td>
                            </tr>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="{{ asset('img/img4.jpg') }}" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                                    <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td class="tx-12">
                                    <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td>Mar 30, 2017 10:30am</td>
                            </tr>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="{{ asset('img/img5.jpg') }}" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                                    <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                </td>
                                <td>Mar 30, 2017 10:30am</td>
                                <td class="tx-12">
                                    <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                                </td>

                                <td>Mar 30, 2017 10:30am</td>
                                <td>Mar 30, 2017 10:30am</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div><!-- card -->
            </div><!-- col-8 -->
            <div class="col-lg-4">
                <div class="card card-body tx-white bg-dark bd-0 pd-0 tx-center">
                    <div class="d-flex justify-content-center mg-b-0">
                        <img src="{{ asset('img/icon2.svg') }}" class="wd-100" alt="">
                    </div>
                    <div id="ktDate" class="tx-md-20 tx-white mg-b-10"></div>
                </div><!-- card -->

                <div class="card mg-t-20">
                    <div class="card-header card-header-default d-flex justify-content-between bg-gray-300">
                        <h6 class="mg-b-0 tx-uppercase tx-14 tx-inverse"><strong>Status Mesin</strong></h6>
                        <div class="card-option tx-24">
                            <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty"></i></a>
                        </div>
                    </div><!-- card-header -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="media">
                                <span class="square-10 bg-success mg-l-10 rounded-circle"></span>
                                <div class="media-body mg-l-15">
                                    <h6 class="mg-b-2 tx-inverse tx-13">SETDA 1</h6>
                                    <p class="mg-b-0 tx-success tx-12">Connected</p>
                                </div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div class="media">
                                <span class="square-10 bg-success mg-l-10 rounded-circle"></span>
                                <div class="media-body mg-l-15">
                                    <h6 class="mg-b-2 tx-inverse tx-13">SETDA 2</h6>
                                    <p class="mg-b-0 tx-success tx-12">Connected</p>
                                </div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div class="media">
                                <span class="square-10 bg-danger mg-l-10 rounded-circle"></span>
                                <div class="media-body mg-l-15">
                                    <h6 class="mg-b-2 tx-inverse tx-13">SETDA 3</h6>
                                    <p class="mg-b-0 tx-danger tx-12">Disconnect</p>
                                </div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->
                    <div class="card-footer">
                        <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Lihat semua mesin</a>
                    </div><!-- card-footer -->
                </div><!-- card -->
            </div><!-- col-4 -->
        </div><!-- row -->
    </div><!-- kt-pagebody -->
    <div class="kt-footer">
        <span>Copyright &copy;. All Rights Reserved. Aset Pemerintah Kabupaten Soppeng.</span>
        <span>Created by: CV. Dianra.</span>
    </div><!-- kt-footer -->
</div><!-- kt-mainpanel -->
</body>
<!-- Scripts -->
<script src="{{ asset('lib/jquery//jquery.js') }}"></script>
<script src="{{ asset('lib/popper.js/popper.js') }}"></script>
<script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
<script src="{{ asset('lib/moment/moment.js') }}"></script>

<script src="{{ asset('js/katniss.js') }}"></script>
<script src="{{ asset('js/ResizeSensor.js') }}"></script>
{{--<script src="{{ asset('js/dashboard.js') }}"></script>--}}
</html>
