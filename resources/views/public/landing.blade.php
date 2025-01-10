@php
    $configData = Helper::appClasses();
    $customizerHidden = 'customizer-hide';
@endphp
@extends('public/template/master')

@section('title', 'Beranda')
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
@endsection

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-statistics.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-analytics.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <div class="row gy-4">
        {{-- <!-- Gamification Card -->
  <div class="col-md-12 col-lg-8">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-6 order-2 order-md-1">
          <div class="card-body">
            <h4 class="card-title pb-xl-2">Congratulations <strong> John!</strong>🎉</h4>
            <p class="mb-0">You have done <span class="fw-semibold">68%</span>😎 more sales today.</p>
            <p>Check your new badge in your profile.</p>
            <a href="javascript:;" class="btn btn-primary">View Profile</a>
          </div>
        </div>
        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
          <div class="card-body pb-0 px-0 px-md-4 ps-0">
            <img src="{{asset('assets/img/illustrations/illustration-john-'.$configData['style'].'.png')}}" height="180" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png" data-app-dark-img="illustrations/illustration-john-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

  <!-- Statistics Total Order -->
  <div class="col-lg-2 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="mdi mdi-cart-plus mdi-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-success me-1">+22%</p>
            <i class="mdi mdi-chevron-up text-success"></i>
          </div>
        </div>
        <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
          <h5 class="mb-2">155k</h5>
          <p class="text-muted mb-lg-2 mb-xl-3">Total Orders</p>
          <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics Total Order -->

  <!-- Sessions line chart -->
  <div class="col-lg-2 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
          <h4 class="mb-0 me-2">$38.5k</h4>
          <p class="mb-0 text-success">+62%</p>
        </div>
        <span class="d-block mb-2 text-muted">Sessions</span>
      </div>
      <div class="card-body">
        <div id="sessions"></div>
      </div>
    </div>
  </div>
  <!--/ Sessions line chart --> --}}

        <!-- Total Transactions & Report Chart -->
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    class="active" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                @foreach ($carousel as $key => $c)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/carousel/' . $c->url) }}" class="d-block w-100"
                                            alt="..." height="415">
                                        {{-- <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div> --}}
                                    </div>
                                @endforeach
                                {{-- <div class="carousel-item">
                                    <img src="{{ asset('storage/carousel/1.jpeg') }}"
                                        class="d-block w-100" alt="..." height="415">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/carousel/1.jpeg') }}"
                                        class="d-block w-100" alt="..." height="415">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div> --}}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Transactions & Report Chart -->

        <!-- Performance Chart -->
        <div class="col-12 col-xl-7 col-md-7">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Aduan Terbaru</h5>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-3 justify-content-between pb-2">
                            <h6 class="mb-0 small">ADUAN</h6>
                            {{-- <h6 class="mb-0 small">WAKTU</h6> --}}
                        </li>
                        @foreach ($aduan as $a)
                            @php
                                $subkategori = \App\Models\Subkategori::find($a->id_subkategori);
                            @endphp
                            <li class="d-flex mb-4">
                                <div class="d-flex w-100 flex-wrap align-items-center gap-2">
                                    <ul class="timeline card-timeline mb-3">
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-danger"></span>
                                            @php
                                                $subkategori = \App\Models\Subkategori::find($a->id_subkategori);
                                            @endphp
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-2 fw-semibold">{{ $subkategori->name }}</h6>
                                                    <small
                                                        class="text-muted">{{ \Carbon\Carbon::parse($a->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY HH:mm:ss') }}</small>
                                                </div>
                                                <p class="text-justify mb-1 mt-2">{{ $a->aduan }}</p>
                                                <span class="text-sm text-muted d-inline-block text-truncate mb-0"
                                                    style="max-width: 650px;">
                                                    {{ $a->response }}
                                                </span>
                                                <br>
                                        <a href="{{ route('detailAduan', $a->id) }}"
                                            class="btn btn-sm btn-primary mt-2">Detail</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                        <li class="d-flex mb-4">
                            <div class="d-flex w-100 flex-wrap align-items center justify-content-center">
                                <a href="/pengaduan/lapak-aduan" class="btn btn-primary">Lihat Semua</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-5 col-md-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Kategori Aduan</h5>
                </div>
                <div class="card-body">
                    <ol class="m-0" style="padding-left: 18px;">
                        @foreach ($sub as $s)
                            <li>
                                <h6 class="mb-2">{{ $s->name }}</h6>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
        <!--/ Performance Chart -->

        <!-- Total Transactions & Report Chart -->
        <div class="col-12 col-xl-12">
            <div class="card bg-primary">
                <div class="card-header">
                    <h2 class="text-center text-white">Alur Pelayanan</h2>
                </div>
                <div class="card-body px-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel-kategori">
                                @foreach ($pelayanan as $p)
                                    <div>
                                        <div class="card">
                                            <a href="{{ $p->url }}" target="_blank" rel="noopener noreferrer">
                                                <div class="card-body">
                                                    <h3><img src="{{ asset('storage/pelayanan/' . $p->image) }}"
                                                            class="d-block w-100" alt="..." height="200"
                                                            width="10"></h3>
                                                </div>
                                            </a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel-kategori').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 6,
            });
        });
    </script>
@endsection
