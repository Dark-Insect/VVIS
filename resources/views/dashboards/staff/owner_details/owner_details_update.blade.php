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
    } .topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: ;
  color: black;
}

.topnav a.active {
  background-color: ;
  color: white;


}

.topnav .search-container {
  float: right;
}
.topnav .reset {
    float: right;
    color: white;
}

.topnav input[type=search] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
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
        <div class="topnav">
            <a class="active" href="{{route('owner_details')}}">OWNER DETAILS</a>
          </div>
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
  <div class="card-header">Update Owner Details Data</div>
  <div class="card-body">

  <div class="panel-body">

    <form action="{{ route('details.edit', $owner_details->id) }}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <br>
        <div class="form-group">
            <label for="report_identifier">Report Identifier </label>
            <input class="form-control" type="text" name="report_identifier" value="{{$owner_details->report_identifier}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="report_date">Report Date </label>
            <input class="form-control" type="date" name="report_date" value="{{$owner_details->report_date}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="report_time">Report Time </label>
            <input class="form-control" type="time" name="report_time" value="{{$owner_details->report_time}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="state">State </label>
            <input class="form-control" type="text" name="state" value="{{$owner_details->state}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="city">City </label>
            <input class="form-control" type="text" name="city" value="{{$owner_details->city}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="report_type">Report Type </label>
            <input class="form-control" type="text" name="report_type" value="{{$owner_details->report_type}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="address">Address </label>
            <input class="form-control" type="text" name="address" value="{{$owner_details->address}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="vehicle_logo">Vehicle Logo</label>
            <input class="form-control" type="text" name="vehicle_logo" value="{{$owner_details->vehicle_logo}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="injury_type">Injury Type </label>
            <input class="form-control" type="text" name="injury_type" value="{{$owner_details->injury_type}}" required>
        </div>
        <br>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
  </div>
</div>

</body>
</html>

@endsection
