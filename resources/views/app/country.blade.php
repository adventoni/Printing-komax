@extends('layouts.master')

@section('content')
<h3>Country Komax</h3>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Country</th>
                <th>Country</th>
                <th>Num_Code</th>
                <th>Alpha_Code</th>
                <th>Code_Iso</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>61</td>
                <td><a href="/edit-country"><i class="fa fa-edit" aria-hidden="true"> Edit</i> </a></td>
            </tr>
            </tbody>
    </table>
    <section id="rounded-outline-buttons">
            <section>
                    <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-country"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection