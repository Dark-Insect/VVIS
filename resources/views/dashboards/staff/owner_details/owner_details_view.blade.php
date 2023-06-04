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
    .card-header{
    background-color: black;
    color: white;
}
.topnav {
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


  <div class="card-header">Owner Details Lists</div>
  <div class="card-body">

  <div class="panel-body">
    <p class="card-title">ID : {{ $owner_details->id}}</p>
    <p class="card-title">Report Identifier : {{ $owner_details->report_identifier}}</p>
    <p class="card-text">Report Date : {{ $owner_details->report_date }}</p>
    <p class="card-text">Report Time : {{ $owner_details->report_time }}</p>
    <p class="card-title">State : {{ $owner_details->state}}</p>
    <p class="card-text">City : {{ $owner_details->city }}</p>
    <p class="card-text">Report Type : {{ $owner_details->report_type }}</p>
    <p class="card-title">Address : {{ $owner_details->address}}</p>
    <p class="card-text">Vehicle Logo : {{ $owner_details->vehicle_logo }}</p>
    <p class="card-text">Injury Type : {{ $owner_details->injury_type }}</p>
  </div>
</div>

</body>
</html>

@endsection
