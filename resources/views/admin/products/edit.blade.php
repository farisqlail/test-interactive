@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Pengaturan tentang kami</div>

                    <div class="card-body">
                        <form action="{{ route('admin.product.update', $settings->id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" class="form-control" name="title" value="{{$settings->title_product}}">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="desc" class="form-control" id="" cols="30" rows="2">
                                    {{$settings->description_product}}
                                </textarea>
                            </div>

                            <button class="btn btn-success float-right">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
