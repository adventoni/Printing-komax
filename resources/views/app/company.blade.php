@extends('layouts.master')

@section('content')
<h3>Company Komax</h3>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Company</th>
                <th>Company</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($companies as $key => $value)
            <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->company_id }}</td>
                    <td>{{ $value->company_name }}</td>
                    <td>{{ $value->country_name }}</td>
                    <td>{{ $value->company_city }}</td>
                    <td>{{ $value->company_address }}</td>
                    <td>{{ $value->created_at }}</td>
                <td><a href="company/{{$value->id}}/edit-company"><button type="submit" class="btn  btn-rounded btn-sm waves-effect"><font color="grey"><i class="fa fa-edit" aria-hidden="true">  Edit </i></font></button></a>
                    <form action="/company/{{$value->id}}" method="POST">
                        <button type="submit" class="btn  btn-rounded btn-sm waves-effect" name="submit" value="Delete"><font color="grey"> <i class="fa fa-trash" aria-hidden="true"> Delete </i></font></button>
                        {{ csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        </form></td>
            </tr>
            @endforeach
            </tbody>
    </table>
    <section id="rounded-outline-buttons">
            <section>
                    <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-company"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection
