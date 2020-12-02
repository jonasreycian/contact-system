@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Contact System</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('contacts.create') }}" title="Create a contact"> <i class="fas fa-plus-circle"></i></a>

            <form action="{{ route('auth.logout') }} " method="POST">
                @csrf
                <button type="submit" title="logout" class="btn btn-danger">
                    Logout
                </button>
            </form>
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
        <td>{{ $contact->name }}</td>
            <td>{{ $contact['company'] }}</td>
            <td>{{ $contact['phone_number'] }}</td>
            <td>{{ $contact['email'] }}</td>
            <td>{{ $contact['created_at'] }}</td>
            <td>

            <a href="{{ route('contacts.show', $contact->id)}}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href=" {{ route('contacts.edit', $contact->id )}} ">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>

            <form action="{{ route('contacts.destroy', $contact->id) }} " method="POST">
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
