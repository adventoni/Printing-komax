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
                @foreach ($countries as $key => $value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value->country_id }}</td>
                <td>{{ $value->country_name }}</td>
                <td>{{ $value->num_code }}</td>
                <td>{{ $value->alpha_code }}</td>
                <td>{{ $value->code_iso }}</td>
                <td><a href="country/{{$value->id}}/edit-country"><button type="submit" class="btn  btn-rounded btn-sm waves-effect"><font color="grey"><i class="fa fa-edit" aria-hidden="true">  Edit </i></font></button></a>
                    <form action="/country/{{$value->id}}" method="POST">
                        <button type="submit" class="btn  btn-rounded btn-sm waves-effect" name="submit" value="Delete" onclick="return confirm('Hapus Data?')"><font color="grey" > <i class="fa fa-trash" aria-hidden="true"> Delete </i></font></button>
                        {{ csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        </form>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
    <section id="rounded-outline-buttons">
            <section>
                    <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-country"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection