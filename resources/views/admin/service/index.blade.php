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
                        <a href="{{route('admin.service.add')}}" class="btn btn-success float-right">+ Tambah Layanan</a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Layanan</th>
                                    <th scope="col">Deskripsi Layanan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->title_service }}</td>
                                        <td>
                                            @if (strlen($item->description_service) > 100)
                                                {{ substr($item->description_service, 0, 100) }}...
                                            @else
                                                {{ $item->description_service }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <a href="{{ route('admin.service.edit', $item->id) }}" class="btn btn-info mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="{{ route('admin.service.delete', $item->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
