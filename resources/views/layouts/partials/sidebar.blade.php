<!-- ##### SIDEBAR LOGO ##### -->
<div id="app" class="kt-sideleft-header">
    <div class="kt-logo"><img src="{{ asset('img/pd-logo8.png') }}" class="wd-200" alt="Image"></div>
    <div id="ktDate" class="kt-date-today"></div>
    <div class="input-group kt-input-search">
        {{--{{ Form::open(array('url'=>'search')) }}--}}
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn mg-0">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
        {{--{{ Form::close() }}--}}
    </div><!-- input-group -->
</div><!-- kt-sideleft-header -->
<!-- ##### SIDEBAR MENU ##### -->
<div class="kt-sideleft">
    <label class="kt-sidebar-label">Navigation</label>
    <ul class="nav kt-sideleft-menu">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link active">
                <i class="icon ion-ios-home-outline"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="icon ion-ios-calendar-outline"></i>
                <span>Reservasi</span>
            </a>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="icon ion-ios-pricetag-outline"></i>
                <span>Invoice</span>
            </a>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-cart-outline"></i>
                <span>Transaksi Keuangan</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="{{ route('keuangan.index') }}" class="nav-link">Pemasukan</a></li>
                <li class="nav-item"><a href="{{ route('keuangan.pengeluaran.index') }}" class="nav-link">Pengeluaran</a></li>
            </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-briefcase-outline"></i>
                <span>Laporan</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="" class="nav-link">Lap. Okupansi</a></li>
                <li class="nav-item"><a href="" class="nav-link">Lap. Status Kamar</a></li>
                <li class="nav-item"><a href="" class="nav-link">Lap. Tagihan</a></li>
                <li class="nav-item"><a href="" class="nav-link">Lap. Rugi Laba</a></li>
                <li class="nav-item"><a href="" class="nav-link">Lap. Barang Inventaris</a></li>
            </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-cloudy-outline"></i>
                <span>Master Data</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="" class="nav-link">Pelanggan</a></li>
                <li class="nav-item"><a href="" class="nav-link">Pengguna</a></li>
                <li class="nav-item"><a href="" class="nav-link">Fasilitas</a></li>
                <li class="nav-item"><a href="" class="nav-link">Opsi Layanan</a></li>
            </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Data Kamar</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="{{ route('tipekamar.index') }}" class="nav-link">Tipe Kamar</a> </li>
                <li class="nav-item"><a href="{{ route('kamar.index') }}" class="nav-link">Detail Kamar</a> </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-email-outline"></i>
                <span>Data Inventaris</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="" class="nav-link">Daftar Properti</a> </li>
                <li class="nav-item"><a href="" class="nav-link">Riwayat Properti</a> </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>Data Keuangan</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="" class="nav-link">Jenis Pemasukan</a> </li>
                <li class="nav-item"><a href="" class="nav-link">Jenis Pengeluaran</a> </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="icon ion-ios-cog-outline"></i>
                <span>Pengaturan</span>
            </a>
        </li><!-- nav-item -->
    </ul>
</div><!-- kt-sideleft -->