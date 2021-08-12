@extends('admin.template.default')

@section('content')
    <div class="col-sm-4">
        <h3 class="m-2 text-dark">Daftar Penulis <a href="{{ route('admin.author.create') }}" class="btn btn-primary">Tambah Penulis</a></h3>
    </div>

    <div class="m-3 box-body">
        @include('admin.template.partial__.alerts')
        <table id="dataauthor" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
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

    <script>
        $(function(){
            $('#dataauthor').DataTable({
                processing: true,
                serverSide: true,
                ajax : '{{ route('admin.author.data') }}',
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'action'}
                ]
            });
        });
    </script>
@endpush