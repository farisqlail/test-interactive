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
                    <div class="card-header">Pengaturan layanan kami</div>

                    <div class="card-body">
                        <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Foto Layanan</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label for="">Nama Layanan</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Layanan</label>
                                <textarea name="desc" class="form-control" id="" cols="30" rows="2">
                                </textarea>
                            </div>

                            <button class="btn btn-success float-right">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
