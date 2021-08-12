@extends('admin.template.default')

@section('content')
    <div class="col-sm-4">
        <h3 class="m-2 text-dark">Laporan Buku Terlaris </h3>
        
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
                    <th>Total Dipinjam</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $page=1;
                    if (request()->has('page')) {
                        $page = request('page');
                    }
                    $no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') - 1); //nilai 10 dari paginate
                @endphp
               @foreach ($books as $book)
               <tr>
                    <td> {{ $no++ }} </td>
                    <td> {{$book->title}} </td>
                    <td> {{$book->description}} </td>
                    <td> {{$book->qty}} </td>
                    <td> {{$book->author->name}} </td>
                    <td> <img src=" {{ $book->getCover() }} " height="150" alt="{{$book->title}}"> </td>
                    <td> {{$book->borrowed_count}} </td>
                </tr>       
               @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    </div>

  

@endsection
