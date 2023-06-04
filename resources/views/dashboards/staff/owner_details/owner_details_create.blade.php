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
  <h1>OWNER DETAILS</h1>
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
  <div class="card-header">Create New Owner Details</div>
  <div class="card-body">

  <div class="panel-body">
                    <form action="{{ route('details.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <br>
                        <div class="form-group">
                            <label for="report_identifier">Report Identifier </label>
                            <input class="form-control" type="text" name="report_identifier" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="report_date">Report Date </label>
                            <input class="form-control" type="date" name="report_date" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="report_time">Report Time </label>
                            <input class="form-control" type="time" name="report_time" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="state">State </label>
                            <input class="form-control" type="text" name="state" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="city">City </label>
                            <input class="form-control" type="text" name="city" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="report_type">Report Type</label>
                            <input class="form-control" type="text" name="report_type" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="address">Address </label>
                            <input class="form-control" type="text" name="address" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="vehicle_logo">Vehicle Logo </label>
                            <input class="form-control" type="text" name="vehicle_logo" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="injury_type">Injury Type </label>
                            <input class="form-control" type="text" name="injury_type" required>
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
