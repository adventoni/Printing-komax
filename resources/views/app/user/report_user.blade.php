@extends('layouts.master2')

@section('content')
<h3>Report</h3>
<hr>
<div class="row">
        <div class="col-sm-6" >
            <form>
                @include('app.user.aksi.pilihan')
                <br>
                <label for="defaultFormRegisterNameEx" class="grey-text">From Date :</label>
                <input type="date" id="defaultFormRegisterNameEx" class="form-control">

                <label for="defaultFormRegisterEmailEx" class="grey-text">To Date :</label>
                <input type="date" id="defaultFormRegisterEmailEx" class="form-control">

                <section id="rounded-outline-buttons">
                        <section>
                                <button type="submit" class="btn btn-outline-primary btn-rounded btn-sm waves-effect"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                        </section>
                </section>
            </form>
        </div>
</div>
@endsection