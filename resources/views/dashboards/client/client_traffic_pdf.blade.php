<!DOCTYPE html>
<html>
<head>
  <title>Traffic Violation Citation Ticket</title>
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
    p{
        color: black;
    }
    h5{
        background-color: black;
        color: white;
    }
    .side-img1{
  float: left;
}
.side-img2{
  float: right;
}
  </style>
</head>
<body>
  <div class="ticket">
    <div class="ticket-header">

        <div class="up"><strong>Republic of the Philippines <br> City of Dumaguete</strong></div>
<div class="side-img1"><img src="https://i.ibb.co/CJZLTr5/Dumaguete-Logo.png"
   alt="" width="68" height="68" style="margin-top: -40px;"></div>
   <div class="side-img2"><img src="https://i.ibb.co/TbbbJyF/TRAFFIC-LOGO-PART-2.png"
     alt="" width="75" height="75" style="margin-top: -40px;"></div>
     <br>
            <hr>
            <h6><strong>TRAFFIC MANAGEMENT OFFICE</strong></h6>
            <h3>MVIR NO. {{$traffic_violation->mvirno}}</h3>
      <h5>TRAFFIC VIOLATION CITATION TICKET</h5>
    </div>



    <div class="ticket-content">
      <label class="ticket-label">Name</label>
      <span>{{$traffic_violation->name}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">Address</label>
      <span>{{$traffic_violation->address}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">License Type</label>
      <span>{{$traffic_violation->licensetype}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">Driver's License No.</label>
      <span>{{$traffic_violation->drivers_license_no}}</span>
    </div>
    <div class="ticket-content">
      <label class="ticket-label">Month/Day/Year</label>
      <span>{{$traffic_violation->datetime}}</span>
    </div>
    <div class="ticket-content">
        <label class="ticket-label">Registration No.</label>
        <span>{{$traffic_violation->registration_no}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Official Receipt</label>
        <span>{{$traffic_violation->official_receipt}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Type</label>
        <span>{{$traffic_violation->type}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Make</label>
        <span>{{$traffic_violation->make}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Plate</label>
        <span>{{$traffic_violation->plate}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Owner</label>
        <span>{{$traffic_violation->owner}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Owner Address</label>
        <span>{{$traffic_violation->owneraddress}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Following Violations</label>
        <span>{{$traffic_violation->following_violations}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Place</label>
        <span>{{$traffic_violation->place}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Time</label>
        <span>{{$traffic_violation->time}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Driver</label>
        <span>{{$traffic_violation->driver}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Date</label>
        <span>{{$traffic_violation->date}}</span>
      </div>
      <div class="ticket-content">
        <label class="ticket-label">Traffic Officer</label>
        <span>{{$traffic_violation->trafficofficer}}</span>
      </div>

  </div>
</body>
</html>

