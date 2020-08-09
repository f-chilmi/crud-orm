@extends('adminLte.master')

@section('content')
<div class="ml-3 mt-3 mr-3">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create New Profiles</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/posts/profile" method="POST">
    @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="body">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@gmail.com">
            </div>
            <div class="form-group">
                <label for="body">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto" placeholder="foto.jpg">
            </div>
                        
        </div>
            
            
            <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>

@endsection
