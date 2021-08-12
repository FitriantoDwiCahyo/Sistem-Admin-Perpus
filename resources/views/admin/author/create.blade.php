@extends('admin.template.default')

@section('content')
    <div class="box m-3">
        <div class="box-header">
            <h4 class="box-title">Tambah Data Penulis</h4>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.author.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama penulis"
                    value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection