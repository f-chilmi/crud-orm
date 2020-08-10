@extends('adminLte.master')

@section('content')
<div clas="mt-3 ml-5">
    <h1>{{ $pertanyaan->judul }} </h1>
    <p>{{ $pertanyaan->isi }}</p>
</div>    
@endsection