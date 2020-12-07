@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Photo Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_id" class="form-control-label">Nama Barang</label>
                    <select name="product_id" class="form-control @error('product_id') is-invalid @enderror">
                        @foreach ($products as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{old('photo')}}" accept="image/*">
                    @error('photo')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="is_default" class="form-control-label">Set Default?</label>
                    <br>
                    <label>
                        <input type="radio" class="form-control-sm-2 @error('is_default') is-invalid @enderror" name="is_default" value="1" accept="image/*"> Ya
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" class="form-control-sm-2 @error('is_default') is-invalid @enderror" name="is_default" value="0" accept="image/*"> Tidak
                    </label>
                    @error('is_default')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection