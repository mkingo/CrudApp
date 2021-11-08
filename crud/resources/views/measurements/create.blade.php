@extends('measurements.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Measurement</h2>
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
   
<form action="{{ route('measurements.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="weight" class="form-control" placeholder="Enter Weight in Kilograms upto two decimal points">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Height:</strong>
                <input type="text" name="height" class="form-control" placeholder="Enter Height in centimetres">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Blood Pressure:</strong>
                <input type="number" name="blood_pressure" class="form-control" placeholder="Blood Pressure">
            </div>
        </div>
            
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sugar: </strong>
                <input type="number" name="sugar" class="form-control" placeholder="Enter Sugar Level in mol/lg">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <input type="hidden" name="client_id" class="form-control" placeholder="client_id">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection