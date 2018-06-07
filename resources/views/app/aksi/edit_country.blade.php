@extends('layouts.master')

@section('content')
<h1>Country</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/country/{{$country->id}}" method="post" enctype="multipart/form-data">

                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Country</label>
                <input type="text" name="kode_country" id="defaultFormRegisterNameEx" class="form-control" value="{{ $country->country_id}}">
            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Country Name</label>
                <input type="text" name="country_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ $country->country_name}}">

                <label for="defaultFormRegisterEmailEx" class="grey-text">Num Code</label>
                <input type="text" name="num_code" id="defaultFormRegisterEmailEx" class="form-control" value="{{ $country->num_code}}">

                <label for="defaultFormRegisterNameEx" class="grey-text">Alpha Code</label>
                <input type="text" name="alpha_code" id="defaultFormRegisterNameEx" class="form-control" value="{{ $country->alpha_code}}">

                <label for="defaultFormRegisterEmailEx" class="grey-text">Code Iso</label>
                <input type="text" name="code_iso" id="defaultFormRegisterEmailEx" class="form-control" value="{{ $country->code_iso}}">
                
                <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Update</button>
                                {{ csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                        </section>
                </section>
            </form>
        </div>
</div>
@endsection