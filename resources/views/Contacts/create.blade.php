@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Contact</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li></li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company:</strong>
                <textarea class="form-control" style="height:50px" name="company" placeholder="company"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <textarea class="form-control" style="height:50px" name="phone_number"
                    placeholder="phone_number"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <textarea class="form-control" style="height:50px" name="email" placeholder="email"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
