@extends('admin.master')
@section('content')
<div class="main-body">
<div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Your short url</h4>
</div>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body m-t-10">
<a href="{{$link->link}}" target="_blank" rel="noopener noreferrer">{{$link->code}}</a>
</div>
</div>
</div>
</div>

</div>
@endsection
