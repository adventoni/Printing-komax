@extends('layouts.master')

@section('content')
<h1>Welcome</h1>
<hr>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
{{-- <p>
    <img src="/img/content.png">
</p> --}}
<div class="view zoom">
    <img src="/img/content.png" class="img-fluid " alt="">
</div>
@endsection