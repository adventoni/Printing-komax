@extends('layouts.master')

@section('content')
<h3>Buyer</h3>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buyer</th>
                <th>Buyer Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td><a href="/edit-buyer"><i class="fa fa-edit" aria-hidden="true"> Edit</i> </a></td>
            </tr>
            </tbody>
    </table>
    <section id="rounded-outline-buttons">
            <section>
                <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-buyer"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection