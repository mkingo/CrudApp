@extends('measurements.layout')

<style>
    .btn {
        margin-bottom: 20px;
    }

</style>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb jumbotron">
            <div class="pull-left">
                <h2>Measurements Crud Application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('measurements.create')}}"> Create New Measurement</a>
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
            <th>Weight</th>
            <th>Height</th>
            <th>Blood Pressure</th>
            <th>Sugar</th>
            
            <th width="280px">Action</th>
            
        </tr>
        @foreach ($measurements as $measurement)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $measurement->weight }}</td>
                <td>{{ $measurement->height }}</td>
                <td>{{ $measurement->blood_pressure }}</td>
                <td>{{ $measurement->sugar }}</td>
                

                <td>

                    <form action="{{ route('measurements.destroy', $measurement->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('measurements.show', $measurement->client_id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('measurements.edit', $measurement->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                
            </tr>
        @endforeach
    </table>

    {!! $measurements->links() !!}

@endsection
