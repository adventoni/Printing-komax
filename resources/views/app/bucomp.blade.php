@extends('layouts.master')

@section('content')
<h3>Bucomp</h3>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Bucomp</th>
                <th>Bucomp Name</th>
                <th>Buyer Name</th>
                <th>City</th>
                <th>Address</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($bucomps as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->kode_bucomp }}</td>
                  <td>{{ $value->bucomp_name }}</td>
                  <td>{{ $value->buyer->name_buyer }}</td>
                  <td>{{ $value->city }}</td>
                  <td>{{ $value->address }}</td>
                  <td>{{ $value->created_at }}</td>
                <td><a href="bucomp/{{$value->id}}/edit-bucomp"><i class="fa fa-edit" aria-hidden="true"> Edit</i> </a>
                    <form action="/bucomp/{{$value->id}}" method="POST">
                        <i class="fa fa-trash" aria-hidden="true"><input type="submit" name="submit" value="Delete">
                        {{ csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        </form></td>
                </tr>
              @endforeach
            </tbody>
    </table>
    <section id="rounded-outline-buttons">
            <section>
                    <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-bucomp"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection