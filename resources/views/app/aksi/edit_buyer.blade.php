@extends('layouts.master')

@section('content')
<h1>Buyer</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/buyer/{{$buyer->id}}" method="POST" enctype="multipart/form-data">
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Buyer</label>
                <input type="text" name="id_buyer" id="defaultFormRegisterNameEx" class="form-control" value="{{ $buyer->id_buyer}}">
                
                <label for="defaultFormRegisterEmailEx" class="grey-text">Buyer Name</label>
                <input type="text" name="name_buyer" id="defaultFormRegisterEmailEx" class="form-control" value="{{ $buyer->name_buyer}}">

                <label for="defaultFormRegisterEmailEx" class="grey-text">Images Buyer</label>
                <input type="file" name="images_buyer" id="defaultFormRegisterEmailEx" class="form-control"><img src="{{ asset('storage/buyer/' . $buyer->images_buyer) }}" width="150">
                <br>
                <label for="exampleFormControlTextarea1" class="grey-text">Hak Akses</label>
                <select class="custom-select" name="hak_akses">
                        <option selected disabled>--Select--</option>
                        <option value="1">Member</option> 
                        <option value="0">Bukan Member</option>                   
                </select> 
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