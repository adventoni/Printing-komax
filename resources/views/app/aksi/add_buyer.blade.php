@extends('layouts.master')

@section('content')
<h1>Buyer</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/buyer" method="post" enctype="multipart/form-data">
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Buyer</label>
                <input type="text" name="id_buyer" id="defaultFormRegisterNameEx" class="form-control" value="{{ old('id_buyer')}}">
                @if($errors->has('id_buyer'))
                <p> {{ $errors->first('id_buyer')}} </p>
                @endif
                <label for="defaultFormRegisterEmailEx" class="grey-text">Buyer Name</label>
                <input type="text" name="name_buyer" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('name_buyer')}}">
                @if($errors->has('name_buyer'))
                <p> {{ $errors->first('name_buyer')}} </p>
                @endif
                <label for="defaultFormRegisterEmailEx" class="grey-text">Images Buyer</label>
                <input type="file" name="images_buyer" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('images_buyer')}}">
                @if($errors->has('images_buyer'))
                <p> {{ $errors->first('images_buyer')}} </p>
                @endif
                <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Save</button>
                                {{ csrf_field()}}
                        </section>
                </section>
            </form>
        </div>
</div>
@endsection