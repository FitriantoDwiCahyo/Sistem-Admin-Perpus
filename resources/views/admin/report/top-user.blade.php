@extends('admin.template.default')

@section('content')
    <div class="col-sm-4">
        <h3 class="m-2 text-dark">Laporan User Teraktif </h3>
        
    </div>

    <div class="m-3 box-body">
        @include('admin.template.partial__.alerts')
        <table id="databook" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Peminjaman</th>
                    <th>Bergabung</th>
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
               @foreach ($users as $user)
               <tr>
                    <td> {{ $no++ }} </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td> {{$user->borrow_count}} </td>
                    <td> {{$user->created_at->diffForHumans()}} </td>
                    
                </tr>       
               @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>

  

@endsection
