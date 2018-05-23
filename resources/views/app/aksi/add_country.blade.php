@extends('layouts.master')

@section('content')
<h1>Country</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
                <!-- Default input name -->
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Country</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">
                
                <br>
            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Country Name</label>
                <input type="text" id="defaultFormRegisterEmailEx" class="form-control">
                <br>
                <label for="defaultFormRegisterEmailEx" class="grey-text">Num Code</label>
                <input type="text" id="defaultFormRegisterEmailEx" class="form-control">
                <br>
                <label for="defaultFormRegisterNameEx" class="grey-text">Alpha Code</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">
                
                <br>
            
                <label for="defaultFormRegisterEmailEx" class="grey-text">Code Iso</label>
                <input type="text" id="defaultFormRegisterEmailEx" class="form-control">
                
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