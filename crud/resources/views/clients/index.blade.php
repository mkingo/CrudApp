@extends('clients.layout')
<style>
    .btn {
        margin-bottom: 20px;
    }

</style>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb jumbotron">
            <div class="pull-left">
                <h2>Clients Crud Application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clients.create') }}"> Create New Client</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered jumbotron">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th width="280px">Action</th>
            <th width="100px">Show Measurements</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->age }}</td>
                <td>{{ $client->gender }}</td>
                <td>{{ $client->address }}</td>

                <td>

                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                <td>
                    <a class="btn btn-warning" href="/measurements">Show Measurements</a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $clients->links() !!}

@endsection
