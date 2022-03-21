@extends('admin.master')
@section('content')
<div class="pcoded-inner-content">
    <div class="main-body">
                                        <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Add Url Shortener</h4>
</div>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body m-t-10">
<form action="{{route('url.store')}}" method="post">
  @csrf
    <div class="col-lg-12">
        <div class="form-group row">
            <label for="name" class="col-lg-2 col-sm-12 col-form-label">Url</label>
            <div class="col-lg-6 col-sm-12">
                <input type="url" value="" class="form-control" name="link" placeholder="Enter your url" autofocus="" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-lg-2 col-sm-12 col-form-label"></label>
            <div class="col-lg-6 col-sm-12">
                <button class="btn btn-primary waves-effect waves-lightml-2" type="submit">
                    <i class="fa fa-save"></i>Submit
                </button>
                <a class="btn btn-secondary waves-effect" href="">
                    <i class="fa fa-times"></i> Cancel
                </a>
            </div>
        </div>

    </div>
</form>
</div>
</div>
</div>
</div>
 </div>
</div>
@endsection
