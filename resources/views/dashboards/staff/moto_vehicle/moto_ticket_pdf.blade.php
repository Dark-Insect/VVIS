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
            <h3>MVIR NO. {{$moto_vehicle->mvirno}}</h3>
            <hr>

      <h5>MOTOR VEHICLE IMPOUNDING RECEIPT</h5>
    </div>
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
