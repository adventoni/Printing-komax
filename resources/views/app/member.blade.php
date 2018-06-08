@extends('layouts.master')

@section('content')
<h3>Member</h3>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="5">No</th>
                <th>Kode Member</th>
                <th>Name</th>
                <th>Hak Akses</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($buyers as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->id_buyer }}</td>
                  <td>{{ $value->name_buyer }}</td>
                  <td>
                        @if($value->hak_akses == '1')
                        Member
                        @elseif($value->hak_akses < '1')
                        Bukan Member
                        @else
                        Unknown
                        @endif 
                  </td>                  
                  <td>{{ $value->created_at }}</td>
                </tr>
              @endforeach
            </tbody>
    </table>
@endsection