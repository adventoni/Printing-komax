@extends('layouts.master')

@section('content')
<h3>Item</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/item" method="post" enctype="multipart/form-data">
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Item</label>
                <input type="text" name="item_id" id="defaultFormRegisterNameEx" class="form-control" value="{{ old('item_id')}}">
                @if($errors->has('item_id'))
                <p> {{ $errors->first('item_id')}} </p>
                @endif
                <label for="defaultFormRegisterEmailEx" class="grey-text">Item Name</label>
                <input type="text" name="item_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ old('item_name')}}">
                @if($errors->has('item_name'))
                <p> {{ $errors->first('item_name')}} </p>
                @endif
                @include('app.aksi.pilihan')
                    <br><br>
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