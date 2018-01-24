@extends('layouts.app')
@section('title','Mesin')
@section('breadcrumb')
    <div class="kt-breadcrumb">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="/">Home</a>
            <span class="breadcrumb-item active">Kamar</span>
        </nav>
    </div><!-- kt-breadcrumb -->
@endsection
@section('content')
    <div class="kt-mainpanel">
        <div class="kt-pagetitle">
            <a href="{{ route('kamar.create') }}" class="btn btn-outline-primary">
                <i class="fa fa-plus mg-r-10"></i>Tambah Kamar
            </a>
            <div class="sk-spinner sk-spinner-pulse bg-gray-800" style="display: none;"></div>
        </div><!-- kt-pagetitle -->
        <div class="kt-pagebody">
            @if(session('Success'))
                @component('widget.alert-success')
                    @slot('judul')
                        Yeaayyy!
                    @endslot
                    {{ session('Berhasil') }}
                @endcomponent
            @endif
            @if(session('Gagal'))
                @component('widget.alert-danger')
                    @slot('judul')
                        Ooopppsss!
                    @endslot
                    {{ session('Gagal') }}
                @endcomponent
            @endif
            <div class="card pd-10 pd-sm-20">
                <div class="table-wrapper">
                    <table id="datatable1" class="table table-hover table-bordered responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p text-center">ID</th>
                            <th class="wd-10p text-center">Tipe Kamar</th>
                            <th class="wd-10p text-center">Fasilitas</th>
                            <th class="wd-10p text-center">Layanan</th>
                            <th class="wd-5p text-center">No Kamar</th>
                            <th class="wd-15p text-center">Harga Harian</th>
                            <th class="wd-15p text-center">Harga Mingguan</th>
                            <th class="wd-15p text-center">Harga Bulanan</th>
                            <th class="wd-15p text-center">Harga Tahunan</th>
                            <th class="wd-10p text-center">Deskripsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($kamar)
                            @foreach($kamar as $item)
                                <tr>
                                    <td class="text-center">{{ $item->kamar_id }}</td>
                                    <td class="text-center">{{  App\TipeKamar::getTipeKamar($item->tipekamar_id) }}</td>
                                    <td class="text-center">{{ App\Fasilitas::getFasilitasName($item->fasilitas_id) }}</td>
                                    <td class="text-center">{{ App\Layanan::getLayananName($item->layanan_id) }}</td>
                                    <td class="text-center">{{ $item->no_kamar }}</td>
                                    <td class="text-center">{{ App\Helpers\Helper::rupiah($item->harga_harian) }}</td>
                                    <td class="text-center">{{ App\Helpers\Helper::rupiah($item->harga_mingguan) }}</td>
                                    <td class="text-center">{{ App\Helpers\Helper::rupiah($item->harga_bulanan) }}</td>
                                    <td class="text-center">{{ App\Helpers\Helper::rupiah($item->harga_tahunan) }}</td>
                                    <td class="text-center">{{ $item->deskripsi }}</td>
                                    {{--<td class="text-center">{{ $item->port }}</td>--}}
                                    {{--<td class="text-center tx-12">--}}
                                        {{--<span class="square-8 bg-danger mg-r-5 rounded-circle"></span> Disconnected--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<a href="{{ url('mesin/connect',['id'=>$item->ID_msn,'ip'=>$item->ip]) }}"--}}
                                           {{--class="btn btn-sm bg-gray-200 btn-link connect" title="Connect Ke Mesin">--}}
                                            {{--<div><i class="fa fa-link"></i></div>--}}
                                        {{--</a>--}}
                                        {{--<a href="{{ url('mesin/lihat',['id'=>$item->ID_msn]) }}"--}}
                                           {{--class="btn btn-sm bg-gray-200 btn-link connect" title="Lihat Mesin">--}}
                                            {{--<div><i class="fa fa-search"></i></div>--}}
                                        {{--</a>--}}
                                        {{--<a href="{{ url('mesin/update',['id'=>$item->ID_msn]) }}"--}}
                                           {{--class="btn btn-sm bg-gray-200 btn-link connect" title="Update Mesin">--}}
                                            {{--<div><i class="fa fa-edit"></i></div>--}}
                                        {{--</a>--}}
                                        {{--<a href="{{ url('mesin/delete',['id'=>$item->ID_msn]) }}"--}}
                                           {{--class="btn btn-sm bg-gray-200 btn-link connect" title="Hapus Mesin">--}}
                                            {{--<div><i class="fa fa-trash"></i></div>--}}
                                        {{--</a>--}}
                                    {{--</td>--}}
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
            </div><!-- card -->
        </div><!-- kt-pagebody -->
        <div class="kt-footer">
            <span>Copyright &copy;. All Rights Reserved. Aset Pemerintah Kabupaten Soppeng.</span>
            <span>Created by: CV. Dianra.</span>
        </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->
@endsection
@push('scriptMesin')
    <script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
    <script>
        $(function () {
            'use strict';
            /*This makes the timeout variable global so all functions can access it.*/
            var timeout;

            /*This is an example function and can be disregarded
            This function sets the loading div to a given string.*/
            function loaded() {
                $('.sk-spinner').hide();
            }

            function startLoad() {
                /*This is the loading gif, It will popup as soon as startLoad is called*/
                $('.sk-spinner').show();
                /*
                This is an example of the ajax get method,
                You would retrieve the html then use the results
                to populate the container.

                $.get('example.php', function (results) {
                    $('#loading').html(results);
                });
                */
                /*This is an example and can be disregarded
                The clearTimeout makes sure you don't overload the timeout variable
                with multiple timout sessions.*/
                clearTimeout(timeout);
                /*Set timeout delays a given function for given milliseconds*/
                timeout = setTimeout(loaded, 1500);
            }

            /*This binds a click event to the refresh button*/
            // $('.disconnect').click(startLoad);
            $('.connect').click(startLoad);
            /*This starts the load on page load, so you don't have to click the button*/
            // startLoad();
            $('#datatable1').DataTable({
                responsive: true,
                bLengthChange: true,
                {{--processing:true,--}}
                    {{--serverSide:true,--}}
                    {{--ajax: '{!! route('gettabledata') !!}',--}}
                    {{--columns: [--}}
                    {{--{ data: 'ID_msn', name: 'ID_msn' },--}}
                    {{--{ data: 'rumpun_ID', name: 'rumpun_id' },--}}
                    {{--{ data: 'nomor', name: 'nomor' },--}}
                    {{--{ data: 'nama', name: 'nama' },--}}
                    {{--{ data: 'ip', name: 'ip' },--}}
                    {{--{ data: 'ComKey', name: 'ComKey' },--}}
                    {{--{ data: 'port', name: 'port' },--}}
                    {{--{ data: 'is_connected', name: 'is_connected' },--}}
                    {{--{ data: 'aktif', name: 'aktif' }--}}
                    {{--],--}}
                language: {
                    searchPlaceholder: 'Cari ...',
                    sSearch: '',
                    sLoadingRecords:'<div class="sk-spinner sk-spinner-pulse bg-gray-800"></div>',
                    sProcessing:'<div class="sk-spinner sk-spinner-pulse bg-gray-800"></div>',
                    lengthMenu: '_MENU_ items/page',
                }
            });
            // Select2
            $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});
        });
    </script>
@endpush