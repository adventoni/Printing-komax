

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session('success')}}
</div>
@endif

@if (session('info'))
<div class="alert alert-info alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session('info')}}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session('danger')}}
</div>
@endif

@if (session('warning'))
<div class="alert alert-warninga lert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>   
    {{ session('warning')}}
</div>
@endif