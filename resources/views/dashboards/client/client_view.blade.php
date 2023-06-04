@extends('layouts.clientDashboard')

@section('content')

<form class="form-style-9">
    <style type="text/css">
.form-style-9{
	max-width: 700px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}

.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"],
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover,
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
.checkboxes label {
  display: block;
  padding-right: 10px;
  padding-left: 22px;
  text-indent: -22px;
}
.checkboxes input {
  vertical-align: middle;
}
.checkboxes label span {
  vertical-align: middle;
}

.main-title{
  text-align: center;
  font-size: 18px;
}
.up{
  text-align: center;
  font-size: 18px;
}
.type{
  text-align: center;
}
.amon{
  float: right;
}
.mid{
  text-align: center;
}
.violations{
  text-align: center;
}
.sidetitle{
  color: white;
  background-color: black;
}
.side-img1{
  float: left;
}
.side-img2{
  float: right;
}


</style>
<!DOCTYPE html>
<html>
<head>
  <title>Motor Vehicle Impounding Receipt</title>
  <style>
    body {
      font-family: Arial, sans-serif;

    }

    .ticket {
      width: 600px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }

    .ticket-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .ticket-label {
      display: inline-block;
      background-color: #eee;
      padding: 5px;
      border-radius: 5px;
      margin-right: 5px;
    }

    .ticket-content {
      margin-bottom: 10px;
    }

    .ticket-content label {
      font-weight: bold;
    }
    @media (max-width: 600px) {
        .ticket {
            padding: 10px;
    }

    .ticket-header {
      text-align: center;
      padding: 10px;
    }

    .ticket-label {
        padding: 10px;
    }

    .ticket-content {
      margin-bottom: 10px;
    }

    .ticket-content label {
      font-weight: bold;
    }
    }
    p{
        color: black;
    }
    h5{
        background-color: black;
        color: white;
    }
  </style>
</head>
<body>
  <div class="ticket">
    <div class="ticket-header">
        <p>REPUBLIC OF THE PHILIPPINES
            CITY OF DUMAGUETE
            OFFICE OF THE MAYOR
            TRAFFIC MANAGEMENT OFFICE</p>
             <h3>MVIR NO.{{$moto_vehicle->mvirno}}</h3>
            <hr>
      <h5>MOTOR VEHICLE IMPOUNDING RECEIPT</h5>
    </div>

    @foreach($moto_vehicle as $moto_vehicle)
    <div class="ticket-content">
      <label class="ticket-label">Owner of the Vehicle</label>
      <span>{{$moto_vehicle->ownerofthevehicle}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">Telephone Number</label>
      <span>{{$moto_vehicle->telephonenumber}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">Complete Address</label>
      <span>{{$moto_vehicle->completeaddress}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">Complete Name of the Driver</label>
      <span>{{$moto_vehicle->completenameofthedriver}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">License Number</label>
      <span>{{$moto_vehicle->license_number}}</span>
    </div>
    <div class="ticket-content">
        <label class="ticket-label">DLR NO.</label>
        <span>{{$moto_vehicle->dlrno}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">MV Plate No.</label>
        <span>{{$moto_vehicle->mvplateno}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Make of the Vehicle</label>
        <span>{{$moto_vehicle->makeofthevehicle}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Type of the Body</label>
        <span>{{$moto_vehicle->typeofthebody}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Year Model</label>
        <span>{{$moto_vehicle->yearmodel}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">MOtor Number</label>
        <span>{{$moto_vehicle->motono}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Chassis Number</label>
        <span>{{$moto_vehicle->chassisnumber}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Violations</label>
        <span>{{$moto_vehicle->violations}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">PLace of Apprehension</label>
        <span>{{$moto_vehicle->place}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Date/Time</label>
        <span>{{$moto_vehicle->datetime}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Remarks</label>
        <span>{{$moto_vehicle->remarks}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">General Condition of the Motor Vehicle</label>
        <span>{{$moto_vehicle->condition}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Vehicle Tool/Lists</label>
        <span>{{$moto_vehicle->vehicle}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Owner/Driver</label>
        <span>{{$moto_vehicle->conformeowner}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Name of Witness</label>
        <span>{{$moto_vehicle->witness}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Address</label>
        <span>{{$moto_vehicle->witnessaddress}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Apprehending Officers</label>
        <span>{{$moto_vehicle->apprehending}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Agency/Office</label>
        <span>{{$moto_vehicle->agency}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Acknowledging Officers</label>
        <span>{{$moto_vehicle->acknowledging}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Designation</label>
        <span>{{$moto_vehicle->designation}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Chief/Traffic Management Office</label>
        <span>{{$moto_vehicle->chief}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Date and Time</label>
        <span>{{$moto_vehicle->chiefdatetime}}</span>
      </div>

  </div>
</body>
</html>

@endforeach

  </ul>
  </form>
@endsection
