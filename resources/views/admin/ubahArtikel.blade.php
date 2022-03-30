<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <div id="wrapper">
        @include('_partials.navbar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('_partials.topbar')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Ubah Artikel</h1>
                            </div>
                            <!-- Content ada di bawah sini -->
                            <form action="{{ route('article.update', $data->id ) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @method('PUT')

                                @if(Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    @if(Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif

                                    @csrf
                                <div class="form-floating mb-3 col-xl-12 col-lg-7">
                                    <label for="floatingInput">Judul Artikel</label>
                                    <input name="title" value="{{ old('title') ? old('title') : $data->title }}" type="text" class="form-control" id="floatingInput" placeholder="{{ $data->title }}">
                                    <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                                </div>
                                <div class="mb-3 col-xl-12 col-lg-7">
                                    <label for="formFile" class="form-label">Header Artikel</label>
                                    <input name="photo" value="{{ old('photo') ? old('photo') : $data->photo }}" class="form-control" type="file" id="formFile">
                                    <span class="text-danger">@error('photo'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-floating col-xl-12 col-lg-7">
                                    <textarea name="description" class="form-control" placeholder="{{ $data->description }}" id="floatingTextarea2" style="height: 100px">
                                        {{ old('description') ? old('description') : $data->description }}
                                    </textarea>
                                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                    <button class="btn btn-primary mt-3" type="submit" >
                                        Update
                                    </button>
                                </div>
                            </div>
                            <!-- end of class row -->
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('_partials.footer')
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/js/demo/datatables-demo.js') }}"></script>

</html>
