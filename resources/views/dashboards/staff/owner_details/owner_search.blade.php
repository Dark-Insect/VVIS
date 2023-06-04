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
  <h1>OWNER DETAILS</h1>
  <form class="form-inline my-2 my-lg-0" type="get" action="" />
    <input class="form-control mr-sm-2" name="query" type="search" placeholder="search" />
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search<button/>
  </form>
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
