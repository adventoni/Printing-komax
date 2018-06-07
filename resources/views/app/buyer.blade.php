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
                <th>Images Buyer</th>
                <th>Hak Akses</th>                
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($buyers as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->id_buyer }}</td>
                  <td>{{ $value->name_buyer }}</td>
                  <td><img src="{{ asset('storage/buyer/' . $value->images_buyer) }}" width="150"></td>
                  <td>
                        @if($value->hak_akses == '1')
                        Member
                        @elseif($value->hak_akses < '1')
                        Bukan Member
                        @else
                        Unknown
                        @endif </td>
                  <td>{{ $value->created_at }}</td>
                <td><a href="/buyer/{{$value->id}}/edit-buyer"><i class="fa fa-edit" aria-hidden="true"> Edit</i> </a>
                    <form action="/buyer/{{$value->id}}" method="POST">
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
                <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect" href="/add-buyer"><i class="fa fa-file-o" aria-hidden="true"></i> Add </a>
            </section>
    </section>
@endsection