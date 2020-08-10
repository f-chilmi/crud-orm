@extends('adminLte.master')

@section('content')
<div class="ml-3 mt-3 mr-3">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Questions {{ $pertanyaan->id }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/posts/{{ $pertanyaan->id }}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $pertanyaan->judul) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control" id="body" name="body" value="{{ old('body', $pertanyaan->isi) }}">
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <!-- <label>Created at</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" name="dateInput" value="{{ old('body', $pertanyaan->tanggal_dibuat) }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask="" im-insert="false">
                </div> -->
                <label>Updated at</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" name="dateUpdate" value="{{ old('body', $pertanyaan->tanggal_diperbaharui) }}" placeholder="yyyy/mm/dd" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask="" im-insert="false">
                </div>
                  
            </div>
            
        </div>
            
            
            <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</div>

@endsection
