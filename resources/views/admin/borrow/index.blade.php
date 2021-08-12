@extends('admin.template.default')

@section('content')
    <div class="col-sm-4">
        <h3 class="m-2 text-dark">Daftar Peminjam </h3>
    </div>

    <div class="m-3 box-body">
        @include('admin.template.partial__.alerts')
        <table id="databorrow" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Action</th>
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

    <form action="" id="returnForm" method="POST">
        @csrf
        @method("PUT")
        <input type="submit" value="Return" style="display: none"> 
    
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
            $('#databorrow').DataTable({
                processing: true,
                serverSide: true,
                ajax : '{{ route('admin.borrow.data') }}',
                columns: [
                    {data: 'id'},
                    {data: 'user'},
                    {data: 'book_title'},
                    {data: 'action'}
                ]
            });
        });
    </script>
@endpush