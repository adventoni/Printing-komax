@extends('layouts.master')

@section('content')
<h3>Bucomp</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Bucomp</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">        

                <label for="defaultFormRegisterEmailEx" class="grey-text">Bucomp Name</label>
                <input type="email" id="defaultFormRegisterEmailEx" class="form-control">
    
                <label for="defaultFormRegisterEmailEx" class="grey-text">City</label>
                <input type="email" id="defaultFormRegisterEmailEx" class="form-control">

                <label for="exampleFormControlTextarea1" class="grey-text">Address</label>
                <textarea class="md-textarea md-textarea-auto form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

                @include('app.aksi.pilihan')
                    <br>
                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-file-o" aria-hidden="true"></i> Save</button>
                        </section>
                </section>
            </form><br><br>
        </div>
</div>
@endsection 