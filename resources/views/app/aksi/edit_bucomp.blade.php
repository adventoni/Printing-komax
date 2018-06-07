@extends('layouts.master')

@section('content')
<h1>Bucomp</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/bucomp/{{$bucomp->id}}" method="post" enctype="multipart/form-data"> 
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Bucomp</label>
                <input type="text" name="kode_bucomp" id="defaultFormRegisterNameEx" class="form-control" value="{{ $bucomp->kode_bucomp}}">
                
                <br>
            
                <!-- Default input email -->
                <label for="defaultFormRegisterEmailEx" class="grey-text">Bucomp Name</label>
                <input type="text" name="bucomp_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ $bucomp->bucomp_name}}">
                
                <br>
                <label for="defaultFormRegisterNameEx" class="grey-text">City</label>
                <input type="text" name="city" id="defaultFormRegisterNameEx" class="form-control" value="{{ $bucomp->city}}">
                
                <br>
            
                <!-- Default input email -->
                <label for="exampleFormControlTextarea1" class="grey-text">Address</label>
                <textarea class="md-textarea md-textarea-auto form-control" name="address" id="exampleFormControlTextarea1" rows="5">{{ $bucomp->address}}</textarea>
                
                <label for="exampleFormControlTextarea1" class="grey-text">Select Buyer</label>
                <select class="custom-select" name="buyers">
                        <option selected disabled>--Select--</option>
                        @foreach($buyers as $key => $value)
                        <option value="{{ $value->id }}"
                                @if ($value->id === $bucomp->buyer_id)
                                selected
                                @endif
                                >
                                {{ $value->name_buyer }}</option>
                        @endforeach
                </select> 
                @if($errors->has('buyer_id'))
                <p> {{ $errors->first('buyer_id')}} </p>
                @endif

                <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Update</button>
                        </section>
                        {{ csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                </section>
            </form>
        </div>
</div>
@endsection