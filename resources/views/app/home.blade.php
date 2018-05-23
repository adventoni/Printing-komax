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

    You are logged in!
</div>
<p>
    <img src="/img/content.png">
</p>
@endsection