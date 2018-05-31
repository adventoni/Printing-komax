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
                {{-- @foreach ($buyers as $buyer)
                <tr>
                  <td>{{ $buyer+1 }}</td>
                  <td>{{ $buyer->id_buyer }}</td>
                  <td>{{ $buyer->name_buyer }}</td>
                  <td>{{ $buyer->images_buyer }}</td>
                  <td>{{ $buyer->created_at }}</td>
                  <td><a href="/edit-buyer"><i class="fa fa-edit" aria-hidden="true"> Edit</i> </a></td>
                </tr>
              @endforeach --}}
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