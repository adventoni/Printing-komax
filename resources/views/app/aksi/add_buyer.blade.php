@extends('layouts.master')

@section('content')
<h1>Buyer</h1>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Buyer</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">
                
                <br>

                <label for="defaultFormRegisterEmailEx" class="grey-text">Buyer Name</label>
                <input type="email" id="defaultFormRegisterEmailEx" class="form-control">
                
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