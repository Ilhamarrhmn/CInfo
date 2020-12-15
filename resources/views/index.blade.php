@extends('layouts.main')

@section('title', 'CInfo')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="storage/assets/img/cinfo_logo.png" loading="lazy"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nav-set" href="/login">Login</a>
            </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="storage/assets/img/covid1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Website Covid Info</h5>
                    <p>Website yang menyediakan segala informasi tentang Covid-19.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="storage/assets/img/covid2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Website Covid Info</h5>
                    <p> Informasi terupdate tentang Covid-19.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="storage/assets/img/covid3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Website Covid Info</h5>
                    <p> Kalian juga bisa mengikuti tantangan yang di berikan oleh kami.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5 bg-light" style="padding:50px 50px; box-shadow: 0px 0px 7px 7px #D7D7D7;">
        <div class="highlight">
            <h6>highlight</h6>
            <hr>
            <div class="card-columns">
                <div class="card">
                    <img src="storage/assets/img/artikel-covid2.jpg" class="card-img-top" alt="Responsive image">
                    <div class="card-body">
                    <h5 class="card-title">Pengertian Covid-19</h5>
                    <p class="card-text">Pada tanggal 31 Desember 2019, World Health Organization (WHO) mendapatkan informasi mengenai kasus pneumonia yang terjadi di kota Wuhan, Provinsi Hubei, Cina.</p>
                    <a href="/artikel-covid" class="btn btn-primary Selengkapnya" style="vertical-align:middle"><span>Selengkapnya </span></a>
                    </div>
                </div>
                <div class="card">
                    <img src="storage/assets/img/artikel-kesehatan1.jpg" class="card-img-top" alt="Responsive image">
                    <div class="card-body">
                    <h5 class="card-title">Jangan cemas dengan covid-19</h5>
                    <p class="card-text">Gangguan kesehatan mental yang terjadi selama pandemi dapat disebabkan oleh berbagai hal, seperti ketakutan terhadap wabah.</p>
                    <a href="/artikel-kesehatan" class="btn btn-primary Selengkapnya" style="vertical-align:middle"><span>Selengkapnya </span></a>
                    </div>
                </div>
                <div class="card">
                    <img src="storage/assets/img/artikel-newnormal2.jpg" class="card-img-top" alt="Responsive image">
                    <div class="card-body">
                    <h5 class="card-title">New Normal</h5>
                    <p class="card-text">Penyebaran Corona Virus Deasease-19 (Covid-19) di Indonesia saat ini sudah semakin meluas, dengan jumlah kasus terpapar Covid-19 semakin bertambah. </p>
                    <a href="/artikel-newnormal" class="btn btn-primary Selengkapnya" style="vertical-align:middle"><span>Selengkapnya </span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="artikel mt-5">
            <h6>Artikel Lainnya</h6>
            <hr>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="storage/assets/img/artikel-newnormal5.jpg" class="card-img" alt="Responsive image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Makan yang menyehatkan</h5>
                            <p class="card-text">Konsumsi makanan sehat setiap hari sangat direkomendasikan untuk mencukupi kebutuhan gizi harian. Hal ini sebenarnya tidak sulit untuk dilakukan karena pilihan makanan sehat yang baik untuk dikonsumsi setiap hari ada banyak ragamnya.</p>
                            <a href="#" class="btn btn-primary Selengkapnya" style="vertical-align:middle"><span>Selengkapnya </span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="storage/assets/img/artikel-newnormal6.jpg" class="card-img" alt="Responsive image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tips Berolahraga</h5>
                            <p class="card-text">Anda yang selama ini jarang atau sama sekali tidak pernah berolahraga sebelumnya mungkin bingung harus memulainya dari mana. Namun apa pun yang jadi alasan Anda untuk mulai hidup lebih aktif, sebaiknya jangan langsung berolahraga yang berat atau yang berintensitas tinggi, seperti angkat beban contohnya.</p>
                            <a href="#" class="btn btn-primary Selengkapnya" style="vertical-align:middle"><span>Selengkapnya </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* animasi Tombol */
        .Selengkapnya {
            display: inline-block;
            border-radius: 4px;
            background-color: blue;
            opacity: 0.8;
            border: none;
            color: #fff;
            transition: all 0.5s;
        }

        .Selengkapnya:hover {
            opacity: 1;
        }

        .Selengkapnya span {
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .Selengkapnya span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .Selengkapnya:hover span {
            padding-right: 25px;
        }

        .Selengkapnya:hover span:after {
            opacity: 1;
            right: 0;
        }

        .carousel-item {
            height: 100vh;
            min-height: 300px;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .carousel-item img {
            filter: blur(6px);
        }

        .carousel-caption {
            bottom: 320px;
            font-family: sans-serif;
            letter-spacing: 2px;
        }

        .carousel-caption h5 {
            font-size: 45px;
            text-transform: uppercase;
        }
    </style>
@endsection