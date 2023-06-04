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
            <a class="active" href="{{route('vehicle_information')}}">VEHICLE INFORMATION</a>
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


  <div class="card-header">Vehicle Information Lists</div>
  <div class="card-body">

  <div class="panel-body">
    <p class="card-title">ID : {{ $vehicle_information->id}}</p>
              <p class="card-title">Tag Date: {{ $vehicle_information->tagdate}}</p>
              <p class="card-text">Tag State : {{ $vehicle_information->tagstate }}</p>
              <p class="card-text">Make : {{ $vehicle_information->make }}</p>
              <p class="card-title">Model : {{ $vehicle_information->model}}</p>
              <p class="card-text">Year : {{ $vehicle_information->year}}</p>
              <p class="card-text">Insurance Company : {{ $vehicle_information->insurance_company }}</p>
              <p class="card-title">Policy Number : {{ $vehicle_information->policy_number}}</p>
  </div>
</div>

</body>
</html>

@endsection
