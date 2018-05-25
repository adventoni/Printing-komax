@extends('layouts.master2')

@section('content')
<h1>Welcome</h1>
<hr>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="view zoom">
    <img src="/img/logobuyer/Puma.png" class="img-fluid " alt="">
</div>
@endsection