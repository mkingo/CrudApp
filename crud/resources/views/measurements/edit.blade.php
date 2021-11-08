@extends('measurements.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit measurement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('measurements.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('measurements.update',$measurement->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Weight:</strong>
                    <input type="text" name="weight" value="{{ $measurement->weight }}" class="form-control" placeholder="Enter Weight in Kilograms upto two decimal points">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Height:</strong>
                    <input type="text" name="height" value="{{ $measurement->height }}" class="form-control" placeholder="Enter Height in centimetres">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>blood Pressure:</strong>
                    <input type="number" name="blood_pressure" value="{{ $measurement->blood_pressure }}" class="form-control" placeholder="blood_pressure">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sugar:</strong>
                    <input type="number" name="sugar" value="{{ $measurement->sugar }}" class="form-control" placeholder="Enter Sugar Level in mol/lg">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection