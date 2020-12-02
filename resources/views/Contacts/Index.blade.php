@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Contact System</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="" title="Create a product"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p></p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>Name</th>
        <th>Company</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date Created</th>
        <th>Actions</th>
    </tr>
    @foreach($contacts as $contact)
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <form action="" method="POST">

                    <a href="" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href="">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $contacts->links() !!}

@endsection
