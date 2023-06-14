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
.dropdown-container {
  display: flex;
  align-items: center;
}

.dropdown {
  margin-right: 10px;
}

.add-dropdown {
  font-size: 18px;
  padding: 5px 10px;
  background-color: #ccc;
  border: none;
  cursor: pointer;
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
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
                <h3 class="pb-2">Motor Vehicle Impounding Receipt (Create)</h3>
                <div class="card-body">
                    <div class="panel-body">
                        <form action="{{ route('moto.store')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @csrf
                            <div class="form-group">
                                <label for="mvirno">MVIR NO.</label>
                                <input class="form-control" type="number"  name="mvirno" id="mvirno" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="ownerofthevehicle">Owner of the Vehicle </label>
                                <input class="form-control" type="string" name="ownerofthevehicle" id="ownerofthevehicle" value="{{ old('ownerofthevehicle')}}"  required>
                            </div>

                            <div class="form-group">
                                <label for="telephonenumber">Telephone Number </label>
                                <input class="form-control" type="number" name="telephonenumber" id="telephonenumber"  value="{{ old('telephonenumber') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="completeaddress">Complete Address</label>
                                <input class="form-control" type="string" name="completeaddress" id="completeaddress" required>
                            </div>

                            <div class="form-group">
                                <label for="completenameofthedriver">Complete Name of Driver </label>
                                <input class="form-control" type="string" name="completenameofthedriver" id="completenameofthedriver" required>
                            </div>

                            <div class="form-group">
                                <label for="license_number">License Number</label>
                                <input class="form-control" type="string" name="license_number" id="license_number" required>
                            </div>

                            <div class="form-group">
                                <label for="dlrno">DLR Number</label>
                                <input class="form-control" type="string" name="dlrno" id="dlrno" required>
                            </div>

                            <div class="form-group">
                                <label for="mvplateno">MV Plate No.</label>
                                <input class="form-control" type="string" name="mvplateno" id="mvplateno" required>
                            </div>

                            <div class="form-group">
                                <label for="makeofthevehicle">Make of Vehicle </label>
                                <input class="form-control" type="string" name="makeofthevehicle" id="makeofthevehicle" required>
                            </div>

                            <div class="form-group">
                                <label for="typeofthebody">Type of the Body</label>
                                <input class="form-control" type="string" name="typeofthebody" id="typeofthebody" required>
                            </div>

                            <div class="form-group">
                                <label for="yearmodel">Year Model</label>
                                <input class="form-control" type="string" name="yearmodel" id="yearmodel" required>
                            </div>

                            <div class="form-group">
                                <label for="motono">Motor Number</label>
                                <input class="form-control" type="string" name="motono" id="motono" required>
                            </div>

                            <div class="form-group">
                                <label for="chassisnumber">Chassis Number </label>
                                <input class="form-control" type="string" name="chassisnumber" id="chassisnumber" required>
                            </div>
                            <h5><center>VIOLATIONS<center></h5>
                                <div class="form-group">
                                    <label for="type">Violations </label>
                                        <select class="form-select @error('violations') is-invalid @enderror" type="string" name="violations[]" id="violations" multiple="multiple" required>
                                            <option selected disabled></option>
                                            <option value="Defective Muffler/No Muffler">Defective Muffler/No Muffler </option>
                                            <option value="No Headlight">No Headlight</option>
                                            <option value="No Tail Light">No Tail Light</option>
                                            <option value="No Signal Light">No Signal Light</option>
                                            <option value="No Plate Attached">No Plate Attached</option>
                                            <option value="No Brake Light">No Brake Light</option>
                                            <option value="Unlicense Driver/Expired DLI">Unlicense Driver/Expired DLI</option>
                                            <option value="Unregistred MV">Unregistred MV</option>
                                            <option value="Deliquent CR/OR">Deliquent CR/OR</option>
                                    </select>
                              </div>

                              <br>
                            <div class="form-group">
                                <label for="place">Place of Apprehension</label>
                                <input class="form-control" ttype="string" name="place" required>
                            </div>
                            <div class="form-group">
                                <label for="datetime">Date/Time</label>
                                <input class="form-control" type="datetime-local" name="datetime" required>
                            </div>
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <input class="form-control" type="string" name="remarks" required>
                            </div>
                            <div class="form-group">
                                <label for="condition">General Condition of the Motor Vehicle</label>
                                <input class="form-control" type="string" name="condition" required>
                            </div>

                            <div class="form-group">
                                <label for="vehicle">Vehicle/Tool Lists </label>
                                <select class="form-select" @error('vehicle') is-invalid @enderror type="string" name="vehicle[]" id="vehicle" multiple="multiple" required>
                                    <option selected disabled></option>
                                    <option value="Air Conditioner">Air Conditioner</option>
                                    <option value="Cigarette Lighter">Cigarette Lighter</option>
                                    <option value="Ash Trays">Ash Trays</option>
                                    <option value="Antenna">Antenna</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Stereo/Speaker">Stereo/Speaker</option>
                                    <option value="Auto Clock">Auto Clock</option>
                                    <option value="Floor Mats Pcs.">Floor Mats Pcs.</option>
                                    <option value="Wiper Knobs">Wiper Knobs</option>
                                    <option value="Cushion Pcs.">Cushion Pcs.</option>
                                    <option value="Seat Cover">Seat Cover</option>
                                    <option value="Rear View Mirror">Rear View Mirror</option>
                                    <option value="Side View Mirror">Side View Mirror</option>
                                    <option value="Windshield Glass">Windshield Glass</option>
                                    <option value="Hub/Caps Pcs.">Hub/Caps Pcs.</option>
                                    <option value="Spare Tire">Spare Tire</option>
                                    <option value="Horns">Horns</option>
                                    <option value="Headlights">Headlights</option>
                                    <option value="EWD">EWD</option>
                                    <option value="Tire Wrench">Tire Wrench</option>
                                    <option value="Jack">Jack</option>
                                    <option value="Pliers Pcs.">Pliers Pcs.</option>

                                </select>
                            </div>
                            <h5><center>CONFORME</center></h5>
                            <div class="form-group">
                                <label for="conformeowner">Owner/Driver</label>
                                <input class="form-control" type="string" name="conformeowner" required>
                            </div>
                            <h5><center>WITNESS</center></h5>
                            <div class="form-group">
                                <label for="witness">Name of Witness</label>
                                <input class="form-control" type="string" name="witness" required>
                            </div>
                            <div class="form-group">
                                <label for="witnessaddress">Address</label>
                                <input class="form-control" type="string"" name="witnessaddress" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Apprehending Officer(s) </label>
                                    <select class="form-select @error('apprehending') is-invalid @enderror" type="string" name="apprehending[]" id="apprehending" multiple="multiple" required>
                                        <option selected disabled></option>
                                        <option value="Benigno Angay">Benigno Angay</option>
                                        <option value="Dionisio R. Tejeros">Dionisio R. Tejeros</option>
                                        <option value="Josaly C. Sembrino">Josaly C. Sembrino</option>
                                        <option value="Rodrigo S. Loreto">Rodrigo S. Loreto</option>
                                        <option value="Reginaldo C. Laredo">Reginaldo C. Laredo</option>
                                        <option value="Junrey B. Gonzales">Junrey B. Gonzales</option>
                                        <option value="Racky O. Paseja">Racky O. Paseja</option>

                                </select>
                          </div>
                          <div class="form-group">
                            <label for="agency">Agency/Office </label>
                            <select class="form-select @error('agency') is-invalid @enderror" type="string" name="agency" id="agency" required>
                                <option selected disabled></option>
                                <option >Traffic Management Office</option>
                            </select>

                            <div class="form-group">
                                <label for="type">Acknowledging Officer(s) </label>
                                    <select class="form-select @error('acknowledging') is-invalid @enderror" type="string" name="acknowledging[]" id="acknowledging" multiple="multiple" required>
                                        <option selected disabled></option>
                                        <option value="Gerardo K. Flores Jr.">Gerardo K. Flores Jr.</option>
                                        <option value="Rey M. Gonzales">Rey M. Gonzales</option>
                                        <option value="Josaly C. Sembrino">Josaly C. Sembrino</option>
                                        <option value="Maurito J. Agan">Maurito J. Agan</option>


                                </select>
                          </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input class="form-control" type="string" name="designation" required>
                            </div>
                            <div class="form-group">
                                <label for="chief">Chief,Traffic Management Office</label>
                                <select class="form-select @error('chief') is-invalid @enderror" type="string" name="chief" id="chief" required>
                                    <option selected disabled></option>
                                    <option >Danny Atillo</option>
                                    <option >Gilbert E. Ablong, Sr.</option>
                                </select>
                            <div class="form-group">
                                <label for="chiefdatetime">DateTime</label>
                                <input class="form-control" type="datetime-local" name="chiefdatetime" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
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
                 <a href="{{ route('moto_vehicle')}}" class="active">
                     <span class="icon"><i class="fas fa-motorcycle"></i></span>
                     <span class="item">Motor Vehicle</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('traffic_violation')}}">
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
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
    $(document).ready(function() {
         $('#mvirno').on('input', function() {
             var mvirno = $(this).val();

             $.ajax({
                 url: 'autofill',
                 type: 'POST',
                 data: {
                     _token: '{{ csrf_token() }}',
                     mvirno: mvirno
                 },
                 success: function(response) {
                     if (response.success) {
                        $('#ownerofthevehicle').val(response.data.owner);
                        $('#telephonenumber').val(response.data.telephonenumber);
                        $('#completeaddress').val(response.data.completeaddress);
                        $('#completenameofthedriver').val(response.data.completenameofthedriver);
                        $('#license_number').val(response.data.license_number);
                        $('#dlrno').val(response.data.dlrno);
                        $('#mvplateno').val(response.data.mvplateno);
                        $('#makeofthevehicle').val(response.data.makeofthevehicle);
                        $('#typeofthebody').val(response.data.typeofthebody);
                        $('#yearmodel').val(response.data.yearmodel);
                        $('#motono').val(response.data.motono);
                        $('#chassisnumber').val(response.data.chassisnumber);
                        //$('#').val(response.data.);
                        // set values for other fields here


                     }
                 }
             });
         });
     });

 </script>

 <script>

var violations = document.getElementById("violations");
var selectedValues = [];

for (var i = 0; i < violations.options.length; i++) {
  if (violations.options[i].selected) {
    selectedValues.push(violations.options[i].value);
  }
}

console.log(selectedValues); // Array of selected values


    document.addEventListener('DOMContentLoaded', function() {
  const addButton = document.querySelector('.add-dropdown');
  const container = document.querySelector('.dropdown-container');

  addButton.addEventListener('click', function() {
    const dropdown = document.createElement('div');
    dropdown.classList.add('dropdown');
    dropdown.innerHTML = `
    <select class="form-select @error('violations') is-invalid @enderror" type="string" name="violations" id="violations"required>
                                    <option selected disabled></option>
                                    <option value="Defective Muffler/No Muffler">Defective Muffler/No Muffler </option>
                                    <option value="No Headlight">No Headlight</option>
                                    <option value="No Tail Light">No Tail Light</option>
                                    <option value="No Signal Light">No Signal Light</option>
                                    <option value="No Plate Attached">No Plate Attached</option>
                                    <option value="No Brake Light">No Brake Light</option>
                                    <option value="Unlicense Driver/Expired DLI">Unlicense Driver/Expired DLI</option>
                                    <option value="Unregistred MV">Unregistred MV</option>
                                    <option value="Deliquent CR/OR">Deliquent CR/OR</option>
                                  </select>
    `;
    container.insertBefore(dropdown, addButton);
  });
});

</script>


 <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

 <script>
    var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
 </script>




</body>
</html>

@endsection
