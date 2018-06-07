@extends('layouts.master')

@section('content')
<h3>Bucomp</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/bucomp" method="post" enctype="multipart/form-data">
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Bucomp</label>
                <input type="text" name="kode_bucomp" id="defaultFormRegisterNameEx" class="form-control" value="{{ old('kode_bucomp')}}">        
                @if($errors->has('kode_bucomp'))
                <p> {{ $errors->first('kode_bucomp')}} </p>
                @endif
                <label for="defaultFormRegisterEmailEx" class="grey-text">Bucomp Name</label>
                <input type="text" name="bucomp_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('bucomp_name')}}">
                @if($errors->has('bucomp_name'))
                <p> {{ $errors->first('bucomp_name')}} </p>
                @endif
                <label for="defaultFormRegisterEmailEx" class="grey-text">City</label>
                <input type="text" name="city" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('city')}}">
                @if($errors->has('city'))
                <p> {{ $errors->first('city')}} </p>
                @endif
                <label for="exampleFormControlTextarea1" class="grey-text">Address</label>
                <textarea class="md-textarea md-textarea-auto form-control" name="address" id="exampleFormControlTextarea1" rows="5">{{ old('address')}}</textarea>
                @if($errors->has('address'))
                <p> {{ $errors->first('address')}} </p>
                @endif
                @include('app.aksi.pilihan')
                    <br> <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Save</button>
                                {{ csrf_field()}}
                            </section>
                </section>
            </form><br><br>
        </div>
</div>
@endsection 