@extends('layouts.master')

@section('content')
<h3>Edit Item</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form action="/item/{{$item->id}}" method="post" enctype="multipart/form-data">
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Item</label>
                <input type="text" name="item_id" id="defaultFormRegisterNameEx" class="form-control" value="{{ $item->item_id}}">

                <label for="defaultFormRegisterEmailEx" class="grey-text">Item Name</label>
                <input type="text" name="item_name" id="defaultFormRegisterEmailEx" class="form-control" value="{{ $item->item_name}}">
     
                <label for="exampleFormControlTextarea1" class="grey-text">Select Buyer</label>
                <select class="custom-select" name="buyers">
                        <option selected disabled>--Select--</option>
                        @foreach($buyers as $key => $value)
                        <option value="{{ $value->id }}"
                                @if ($value->id === $item->buyer_id)
                                selected
                                @endif
                                >
                                {{ $value->name_buyer }}</option>
                        @endforeach
                </select> 
                    <br><br>
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