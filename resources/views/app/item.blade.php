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
                @foreach ($items as $key => $value)
                <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->item_id }}</td>
                        <td>{{ $value->item_name }}</td>
                        <td>{{ $value->buyer->name_buyer }}</td>
                        <td>{{ $value->created_at }}</td>
                    <td><a href="item/{{$value->id}}/edit-item"><button type="submit" class="btn  btn-rounded btn-sm waves-effect"><font color="grey"><i class="fa fa-edit" aria-hidden="true">  Edit </i></font></button></a>
                        <form action="/item/{{$value->id}}" method="POST">
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
                    <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-item"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection