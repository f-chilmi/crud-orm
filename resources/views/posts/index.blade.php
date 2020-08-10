@extends('adminLte.master')

@section('content')
<div class="mt-3 ml-3 mr-3">
    <div class="card">
        <div class="card-header mb-3">
            <h3 class="card-title">Daftar Pertanyaan</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}        
        </div>
        @endif
        <a href="/posts/create" class="btn btn-primary ml-3">Add New Questions</a>
            <table class="table table-head-fixed mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Dibuat</th>
                    <th>Tanggal Diperbaharui</th>
                    <th style= "width:40px">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($pertanyaan as $key => $pertanyaan)
                    <tr>
                        <td> {{$key + 1 }} </td>
                        <td> {{$pertanyaan->judul }} </td>
                        <td> {{$pertanyaan->isi }} </td>
                        <td> {{$pertanyaan->tanggal_dibuat }} </td>
                        <td> {{$pertanyaan->tanggal_diperbaharui }} </td>
                        <td style="display: flex;">
                            <a href="posts/{{$pertanyaan->id}}" class="btn btn-info btn-sm">Show</a>
                            <a href="/posts/{{$pertanyaan->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                            <form action="/posts/{{$pertanyaan->id}}" method="post">
                            @csrf
                            @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                    <td colspan="6" align="center">Tidak ada pertanyaan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>


</div>
@endsection