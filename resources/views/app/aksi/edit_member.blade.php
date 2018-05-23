@extends('layouts.master')

@section('content')
<h3>Edit Member</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
            
                <label for="defaultFormRegisterNameEx" class="grey-text">Kode Member</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">

                <label for="defaultFormRegisterNameEx" class="grey-text">Username</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control">
    
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