@extends('layouts.master')

@section('content')
<h3>Item</h3>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Item</th>
                <th>Item</th>
                <th>Buyer Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>Tiger Nixon</td>
                <td>61</td>
                <td><a href="/edit-item"><i class="fa fa-edit" aria-hidden="true"> Edit</i> </a></td>
            </tr>
            </tbody>
    </table>
    <section id="rounded-outline-buttons">
            <section>
                    <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-item"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection