@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title>VVIS</title>

<style>

  html, body{
    background-color: dark;
  }
    .w3-bar-item{
        background-color: orangered;
        color: white;
    }

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-black w3-bar-block" style="width:15%">
  <h5 class="w3-bar-item">STAFF DASHBOARD</h3>
  <a href="{{ route('staff.dashboard') }}" class="w3-bar-item w3-button">Dashboard</a>
  <a href="{{ route('owner_details') }}" class="w3-bar-item w3-button">Owner Details</a>
  <a href="{{ route('vehicle_information') }}" class="w3-bar-item w3-button">Vehicle Information</a>
  <a href="{{ route('drivers_information') }}" class="w3-bar-item w3-button">Driver's Information</a>
  <a href="{{ route('moto_vehicle') }}" class="w3-bar-item w3-button">Moto Vehicle Impounding Receipt</a>
  <a href="{{ route('traffic_violation') }}" class="w3-bar-item w3-button">Traffic Violation Citation Ticket</a>
  <a href="{{ route('conforme') }}" class="w3-bar-item w3-button">Conforme</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container w3-black">
  <h1>VEHICLE INFORMATION</h1>
</div>



<div class="w3-container">
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="class-header">
                        <h2></h2>
                         </div>
                            </div>
                                </div>
                                    </div>

                               <div class="card" style="margin:20px;">

            <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif
  <div class="card-header">Create New Vehicle Information</div>
  <div class="card-body">

  <div class="panel-body">
                    <form action="{{ route('vehicle.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <br>
                        <div class="form-group">
                            <label for="tagdate">Tag Date </label>
                            <input class="form-control" type="date" name="tagdate" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tagstate">Tag State </label>
                            <input class="form-control" type="text" name="tagstate" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="make">Make</label>
                            <input class="form-control" type="text" name="make" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input class="form-control" type="text" name="model" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input class="form-control" type="number" name="year" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="insurance_company">Insurance Company</label>
                            <input class="form-control" type="text" name="insurance_company" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="policy_number">Policy Number</label>
                            <input class="form-control" type="number" name="policy_number" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">SAVE</button>
                        </div>
  </div>
</div>

</body>
</html>

@endsection
