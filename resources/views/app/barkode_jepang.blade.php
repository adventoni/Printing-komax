@extends('layouts.master')

@section('content')
<h3>Import</h3>
<hr>
<div class="card">
    <div class="card-body">
        <div class="md-form">
            <div class="file-field">
                <h4>File Barcode Jepang (PM32)</h4>
                <h6>File .XLS</h6>
                <div class="btn indigo darken-4 btn-sm float-left waves-effect waves-light">
                    <span>Choose file</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your file"> 
                </div>
            </div>
            <div>
                <button type="submit" class="btn indigo darken-4 btn-sm float-left z-depth-1a  waves-effect waves-light">GO !</button>
            </div>
        </div>
    </div>
</div>
@endsection