<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Daftar Artikel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
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
                                <h1 class="h3 mb-0 text-gray-800">Profil</h1>
                            </div>
                            <!-- Content ada di bawah sini -->
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="text-center">
                                            <img src="/img/undraw_profile.svg" class="avatar img-circle img-thumbnail mb-4" alt="avatar" width="100px" height="100px">
                                            <input type="file" class="text-center center-block well well-sm">
                                        </div>
                                    </div>
                                    <!-- edit form column -->
                                    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="{{ $LoggedUserInfo['username'] }}" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="11111122333" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Confirm password:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="11111122333" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-8">
                                                    <input class="btn btn-primary" value="Simpan" type="button">
                                                </div>
                                            </div>
                                        </form>
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

    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/js/demo/datatables-demo.js"></script>

</html>
