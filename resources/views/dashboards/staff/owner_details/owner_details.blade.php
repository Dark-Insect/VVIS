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
  font-size: 20px;


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
  <a href="{{ route('owner_details') }}"  class="w3-bar-item w3-button w3-grey" class="w3-bar-item w3-button">Owner Details</a>
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
        <div class="search-container">
          <form action="">
            <input type="search" placeholder="Search.." value="{{$search}}" name="search">
            <button type="submit"><i class="fa fa-search">Search</i></button>
            <a href="{{ route('owner_details')}}" type="button"><i class="reset">Reset Search</i></a>
          </form>
        </div>
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
<div class="card-body">
    <a href="{{ route('owner_details_create') }}" class="btn btn-success btn-sm" title="Add">
        Add New
    </a>
    <a href="{{ route('pdf.owner') }}" class="btn btn-warning btn-sm" title="Export">
        Export PDF
    </a>

    <div class="table-responsive">
                            <table class="table table-striped, table table-bordered table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th class="p-2 mb-2 bg-secondary text-white">ID</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Report Identifier</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Report Date</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Report Time</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">State</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">City</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Report Type</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Address</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Vehicle Logo</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Injury Type</th>
                                        <th class="p-1 mb-2 bg-secondary text-white">Actions</th>
                                    </tr>
                                 </thead>

                                 @foreach($owner_details as $item)
                                    <tr>
                                        <td class="p-1 mb-2 text-white">{{ $loop->iteration }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->report_identifier }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->report_date }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->report_time }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->state}}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->city }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->report_type }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->address}}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->vehicle_logo }}</td>
                                        <td class="p-1 mb-2 text-white">{{ $item->injury_type}}</td>

                                       <td>
                                       <a href="{{ route('details.view', $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('details.edit', $item->id) }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ route('details.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                       </td>
                                     </tr>
                                @endforeach
</div>
</div>
</body>
</html>

@endsection
