@extends('adminLte.master')

@section('content')
<div class="ml-3 mt-3 mr-3">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create New Post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
    @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control" id="body" name="body" placeholder="Body">
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
