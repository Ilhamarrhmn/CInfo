<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!-- <link href = "{{asset ('assets/css/bootstrap.min.css')}}" rel = "stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="{{ Storage::url('assets/css/bootstrap.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ Storage::url('assets/datatables/datatablecss.min.css') }}">

        <title>@yield('title')</title>
    </head>
    <body style="background-color:#E7E7EC;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="storage/assets/img/cinfo_logo.png" loading="lazy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
        @endif
        @if (session()->has('status'))
            <div class="alert alert-info">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <div class="mt-5 bg-white" style="width: 800px; margin: 0 190px; padding:25px 50px;">
            @yield('content')
        </div>

        <div class="card text-center container mt-5">
            <div class="card-body">
                <h5 class="card-subtitle mb-2">@yield('tantangan')</h5>
                <p class="card-text">Ingin mengikuti tantangan? kirim kan tantangan anda dibawah</p>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalUploadGambar">Kirim tantangan</button>
            </div>
        </div>

        <div class="modal fade" id="modalUploadGambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload Tantangan Kamu!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="container">
                                    <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <b>File Gambar</b><br/>
                                            <input type="file" name="file">
                                        </div>
                                        <div class="form-group">
                                            <b>Nama Kamu</b>
                                            <input class="form-control" class="form-control" name="keterangan"></input>
                                        </div>
                                        <input type="submit" value="Upload" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="container mt-5">
            @yield('komentar')
        </div>

        <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script> -->
        <script src="{{ Storage::url('assets/js/bootstrap.min.js') }}"> </script>
        <script type="text/javascript" src="{{ Storage::url('assets/datatables/jquery-3.5.1.js') }}"></script>
	    <script type="text/javascript" src="{{ Storage::url('assets/js/bootstrap.js') }}"></script>
        
        <footer>
            <p style="text-align: center; padding: 20px 0px; margin-top:20px;">Copyright &copy; 2020-2021 Covid Info . All Rights Reserved </p>
        </footer>
    </body>
</html>