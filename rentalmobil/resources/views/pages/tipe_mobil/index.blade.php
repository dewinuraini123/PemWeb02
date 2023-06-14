@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tipe</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Tipe</li>
            </ol>
            <a href="/tipe_mobil/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipe Mobil</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipeData as $tipe_mobil)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$tipe_mobil->tipe}}</td>
                                <td>
                                    <a href="/tipe_mobil/edit/{{ $tipe_mobil->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/tipe_mobil/delete/{{ $tipe_mobil->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection