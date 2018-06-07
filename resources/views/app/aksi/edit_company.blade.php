@extends('layouts.master')

@section('content')
<h1>Company</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/company/{{$company->id}}" method="post" enctype="multipart/form-data">
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Company</label>
                <input type="text" name="kode_kompany" id="defaultFormRegisterNameEx" class="form-control" value="{{ $company->company_id}}">
                
                <label for="defaultFormRegisterEmailEx" class="grey-text">Company</label>
                <input type="text" name="company_name"  id="defaultFormRegisterEmailEx" class="form-control" value="{{ $company->company_name}}">
                
                <label for="defaultFormRegisterNameEx" class="grey-text">City</label>
                <input type="text" name="company_city" id="defaultFormRegisterNameEx" class="form-control" value="{{ $company->company_city}}">

                <label for="exampleFormControlTextarea1" class="grey-text">Address</label>
                <textarea class="md-textarea md-textarea-auto form-control" name="company_address" id="exampleFormControlTextarea1" rows="5">{{ $company->company_address}}</textarea>
                
                <label for="exampleFormControlTextarea1" class="grey-text">Select Buyer</label>
                <select class="custom-select" name="id_country">
                    <option selected disabled>--Select--</option>
                    @foreach($countries as $key => $value)
                        <option value="{{ $value->id }}"
                                @if ($value->id === $company->id_country)
                                selected
                                @endif
                                >{{ $value->country_name }}</option>
                        @endforeach
                      </select>
                      @if($errors->has('id_country'))
                      <p> {{ $errors->first('id_country')}} </p>
                      @endif
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