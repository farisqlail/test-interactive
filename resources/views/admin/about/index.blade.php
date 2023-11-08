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
                        <form action="{{ route('admin.update', $about->id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="">Tentang kami</label>
                                <textarea name="about" class="form-control" id="" cols="30" rows="10">
                                    {{ $about->about }}
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
