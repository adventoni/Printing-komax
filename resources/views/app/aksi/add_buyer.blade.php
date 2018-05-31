@extends('layouts.master')

@section('content')
<h1>Buyer</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Buyer</label>
                <input type="text" name="kode_buyer" id="defaultFormRegisterNameEx" class="form-control" >
                
                <br>

                <label for="defaultFormRegisterEmailEx" class="grey-text">Buyer Name</label>
                <input type="text" name="buyer_name" id="defaultFormRegisterEmailEx" class="form-control">
                
                <label for="defaultFormRegisterEmailEx" class="grey-text">Images Buyer</label>
                <input type="file" name="gambar" id="defaultFormRegisterEmailEx" class="form-control">
                
                <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Save</button>
                        </section>
                </section>
            </form>
        </div>
</div>
@endsection