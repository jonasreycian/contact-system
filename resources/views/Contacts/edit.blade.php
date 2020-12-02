@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Contact</h2>
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

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value=" {{ $contact->name }} " class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company:</strong>
                <input class="form-control" style="height:50px" name="company" placeholder="company" value="{{ $contact->company }}" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input class="form-control" style="height:50px" name="phone_number" value="{{ $contact->phone_number }}"
                    placeholder="phone_number" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input class="form-control" style="height:50px" name="email" placeholder="email" value="{{ $contact->company }}" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
