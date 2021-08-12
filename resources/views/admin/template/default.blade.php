<!DOCTYPE html>
<html>

    @include('admin.template.partial__.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Navbar -->
    @include('admin.template.partial__.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.template.partial__.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-9">
                    <h1 class="col-8">{{Breadcrumbs::current()->title}}</h1>
                </div><!-- /.col -->
                <div class="col-3">
                    {{ Breadcrumbs::render()}}
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.template.partial__.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('admin.template.partial__.jsnya')
</body>
</html>
