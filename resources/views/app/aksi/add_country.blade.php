@extends('layouts.master')

@section('content')
<h1>Country</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/country" method="post" enctype="multipart/form-data">
                <!-- Default input name -->
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Country</label>
                <input type="text" name="kode_country" id="defaultFormRegisterNameEx" class="form-control" value="{{ old('kode_country')}}">
                @if($errors->has('kode_country'))
                <p> {{ $errors->first('kode_country')}} </p>
                @endif
            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Country Name</label>
                <input type="text" name="country_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('country_name')}}">
                @if($errors->has('country_name'))
                <p> {{ $errors->first('country_name')}} </p>
                @endif

                <label for="defaultFormRegisterEmailEx" class="grey-text">Num Code</label>
                <input type="text" name="num_code" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('num_code')}}">
                @if($errors->has('num_code'))
                <p> {{ $errors->first('num_code')}} </p>
                @endif

                <label for="defaultFormRegisterNameEx" class="grey-text">Alpha Code</label>
                <input type="text" name="alpha_code" id="defaultFormRegisterNameEx" class="form-control" value="{{ old('alpha_code')}}">
                @if($errors->has('alpha_code'))
                <p> {{ $errors->first('alpha_code')}} </p>
                @endif

            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Code Iso</label>
                <input type="text" name="code_iso" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('code_iso')}}">
                @if($errors->has('code_iso'))
                <p> {{ $errors->first('code_iso')}} </p>
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