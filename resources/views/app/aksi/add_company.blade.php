@extends('layouts.master')

@section('content')
<h3>Company</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/company" method="post" enctype="multipart/form-data">
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Company</label>
                <input type="text" name="kode_company" id="defaultFormRegisterNameEx" class="form-control" value="{{ old('kode_company')}}">
                @if($errors->has('kode_company'))
                <p> {{ $errors->first('kode_company')}} </p>
                @endif
                <label for="defaultFormRegisterEmailEx" class="grey-text">Company Name</label>
                <input type="text" name="company_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('company_name')}}">
                @if($errors->has('company_name'))
                <p> {{ $errors->first('company_name')}} </p>
                @endif

                <label for="defaultFormRegisterEmailEx" class="grey-text">City</label>
                <input type="text" name="company_city" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('company_city')}}">
                @if($errors->has('company_city'))
                <p> {{ $errors->first('company_city')}} </p>
                @endif
                <label for="exampleFormControlTextarea1" class="grey-text">Address</label>
                <textarea class="md-textarea md-textarea-auto form-control" name="company_address" id="exampleFormControlTextarea1" rows="5">{{ old('company_address')}}</textarea>
                @if($errors->has('company_address'))
                <p> {{ $errors->first('company_address')}} </p>
                @endif
                @include('app.aksi.pilihan2')
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