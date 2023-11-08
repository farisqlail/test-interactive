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


                <div class="card mb-3">
                    <div class="card-header">
                        <a href="{{route('admin.product.add')}}" class="btn btn-success float-right">+ Tambah produk</a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Deskripsi Produk</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->title_product }}</td>
                                        <td>
                                            @if (strlen($item->description_product) > 100)
                                                {{ substr($item->description_product, 0, 100) }}...
                                            @else
                                                {{ $item->description_product }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <a href="{{ route('admin.product.edit', $item->id) }}" class="btn btn-info mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="{{ route('admin.product.delete', $item->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
