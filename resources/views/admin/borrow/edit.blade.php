@extends('admin.template.default')

@section('content')
    <div class="box m-3">
        <div class="box-header">
            <h4 class="box-title">Update Data Penulis</h4>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.author.update',$author) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" value="{{ old('name') ?? $author->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama penulis">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection