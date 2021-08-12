@extends('admin.template.default')

@section('content')
    <div class="col-sm-4">
        <h3 class="m-2 text-dark">Daftar Buku 
        <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Tambah Buku</a></h3>
    </div>

    <div class="m-3 box-body">
        @include('admin.template.partial__.alerts')
        <table id="databook" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Kuantitas</th>
                    <th>Penulis</th>
                    <th>Cover</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            {{-- <tbody>
                <tr>
                    <td>1</td>
                    <td>Ucup</td>
                </tr>
            </tbody> --}}
        </table>
    </div>

    <form action="" id="deleteForm" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete" style="display: none"> 
    
    </form>

@endsection

@push('style')
<!--Table-->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
@endpush

@push('jsnya')
    <script src="{{asset('assets/plugins/bs-notify.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    
    <!--efek close sendiri pada notif-->
    <script>
        $(function(){
            $('#databook').DataTable({
                processing: true,
                serverSide: true,
                ajax : '{{ route('admin.book.data') }}',
                columns: [
                    {data: 'id'},
                    {data: 'title'},
                    {data: 'author'},
                    {data: 'description'},
                    {data: 'qty'},
                    {data: 'cover'},
                    {data: 'action'}
                ]
            });
        });
    </script>
@endpush