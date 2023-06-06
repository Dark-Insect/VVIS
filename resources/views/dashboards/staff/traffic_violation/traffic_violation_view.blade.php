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

    .box-container{
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
        padding: 5px;
    }
    .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.box-container{
        margin-top: 20px;
        margin-left: 40px;
        margin-right: 80px;
        padding: 5px;
        align-content: center;


    }
    .down-container{

    }


    .circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: darkblue;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

h2{
    color: orange !important;
    background-color: black;
}
 p{
    color: white;
}
.logo{
    height: 120px;
  width: 120px;
  float: left;
  margin-left: 20px;
  margin-top: 9px;
  margin-bottom: 2px;
  position: relative;
}
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

*{
	list-style: none;
	text-decoration: none;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
}

body{
	background: #f5f6fa;
}

.wrapper .sidebar{
	background: rgb(5, 68, 104);
	position: fixed;
	top: 0;
	left: 0;
	width: 225px;
	height: 100%;
	padding: 20px 0;
	transition: all 0.5s ease;
    margin-top: 55px;
}

.wrapper .sidebar .profile{
	margin-bottom: 30px;
	text-align: center;
}

.wrapper .sidebar .profile img{
	display: block;
	width: 100px;
	height: 100px;
    border-radius: 50%;
	margin: 0 auto;
}

.wrapper .sidebar .profile h3{
	color: #ffffff;
	margin: 10px 0 5px;
}

.wrapper .sidebar .profile p{
	color: rgb(206, 240, 253);
	font-size: 14px;
}

.wrapper .sidebar ul li a{
	display: block;
	padding: 13px 0px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 16px;
	position: relative;
}

.wrapper .sidebar ul li a .icon{
	color: #dee4ec;
	width: 30px;
	display: inline-block;
}



.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
	color: #0c7db1;
	background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
	color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
	display: block;
}

.wrapper .section{
	width: calc(100% - 225px);
	margin-left: 225px;
	transition: all 0.5s ease;
}

.wrapper .section .top_navbar{
	background: rgb(7, 105, 185);
	height: 50px;
	display: flex;
	align-items: center;
	padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
	font-size: 28px;
	color: #f4fbff;
}

.wrapper .section .top_navbar .hamburger a:hover{
	color: #a2ecff;
}

 .wrapper .section .container{
	margin: 10px;
	background: transparent;
	padding: 30px;
	line-height: 28px;
}

body.active .wrapper .sidebar{
	left: -225px;
}

body.active .wrapper .section{
	margin-left: 0;
	width: 100%;
}
@media only screen and (max-width:800px) {
            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                display: block;
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                padding-left: 50%;
                border: none;
                border-bottom: 1px solid #eee;
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                border-bottom: 1px solid #ccc;
            }
}


</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mainpower.css">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

  <div class="wrapper">
    <div class="section">
 <div class="top_navbar">
   <div class="hamburger">
     <a href="#">
       <i class="fas fa-bars"></i>
     </a>
   </div>
 </div>

 <div class="box-container">
    <div class="row">

 <div class="container">

    <div class="down-container">
        <div class="row">
            <section class="bg-light p-5">
                <form class="form-style-9">
                    <a href="{{ route('pdf.trafficTicket', $traffic_violation->id) }}" class="btn btn-danger" title="Export">
                        Export Ticket into PDF
                    </a>

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
      background-color: #fff;
      border-radius: 5px;
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



 </div>
</div>
     <div class="sidebar">
         <div class="profile">
             <img src="https://cdn3.iconfinder.com/data/icons/team-management/136/28-512.png" alt="profile_picture">
             <h3>STAFF DASHBOARD</h3>
             <p>{{ Auth::user()->name }}</p>
         </div>
         <ul>
             <li>
                 <a href="{{ route('staff.dashboard')}}">
                     <span class="icon"><i class="fas fa-home"></i></span>
                     <span class="item">Dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('moto_vehicle')}}" >
                     <span class="icon"><i class="fas fa-motorcycle"></i></span>
                     <span class="item">Motor Vehicle</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('traffic_violation')}}" class="active">
                     <span class="icon"><i class="fas fa-ticket"></i></span>
                     <span class="item">Violation</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('payment.index')}}">
                     <span class="icon"><i class="fas fa-money"></i></span>
                     <span class="item">Payment</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('logout')}}">
                     <span class="icon"><i class="fas fa-sign-out"></i></span>
                     <span class="item">Logout</span>
                 </a>
             </li>
         </ul>
     </div>

 </div>



 <script>
    var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
 </script>

</body>
</html>

@endsection
