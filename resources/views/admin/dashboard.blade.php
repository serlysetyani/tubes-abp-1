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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <style>
        .center-paginat {
            margin: auto;
            width: 10%;
            padding: 15px;
        }
    </style>
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
                                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                <a href="/artikelbaru" class="d-none d-sm-inline-block btn btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Buat
                                    Artikel</a>
                            </div>
                            <!-- Content ada di bawah sini -->
                            <div class="row">
                                <!-- Card -->
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Jumlah Artikel</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah->count()  }} <span>Artikel</span></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Jumlah pengunjung</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">215,000 <span>Pengunjung</span></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>

                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class=" text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Judul Artikel</th>
                                                            <th>Tanggal Publish</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(!empty($data) && $data->count())
                                                        @foreach($data as $key => $value)
                                                        <tr>
                                                            <td>{{ $value->title }}</td>
                                                            <!-- format date terserah -->
                                                            <td>{{ $value->created_at }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                                                <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('article.edit', $value->id) }}'"><i class="fas fa-edit"></i></button>
                                                                <form class="d-inline" action="{{ route('deleteArtikel', $value->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button  class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="10">There are no data.</td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                </table>
                                                <div class="center-paginat">
                                                    {!! $data->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of class row -->
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

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/js/sb-admin-2.min.js"></script>

    {{-- <script src="/vendor/datatables/jquery.dataTables.min.js"></script> --}}
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/js/demo/datatables-demo.js"></script>

</html>
