@extends('layouts.master')

@section('content')
<h1>Company</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Company</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">
                
                <br>
            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Company</label>
                <input type="text" id="defaultFormRegisterEmailEx" class="form-control">
                <br>
                <label for="defaultFormRegisterEmailEx" class="grey-text">Country</label>
                <input type="text" id="defaultFormRegisterEmailEx" class="form-control">
                <br>
                <label for="defaultFormRegisterNameEx" class="grey-text">City</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">
                
                <br>
            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Address</label>
                <input type="text" id="defaultFormRegisterEmailEx" class="form-control">
                
                <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Update</button>
                        </section>
                </section>
            </form>
        </div>
</div>
@endsection