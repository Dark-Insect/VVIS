<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {

}
.title {
	  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>MOTO VEHICLE IMPOUNDING RECEIPT </h2>

<table>
  <tr class="title">
    <th class="p-2 mb-2 bg-secondary text-white">ID</th>
    <th class="p-1 mb-2 bg-secondary text-white">Owner of the Vehicle</th>
    <th class="p-1 mb-2 bg-secondary text-white">Complete Address</th>
    <th class="p-1 mb-2 bg-secondary text-white">Telephone Number</th>
    <th class="p-1 mb-2 bg-secondary text-white">Complete Name of the Driver</th>
    <th class="p-1 mb-2 bg-secondary text-white">License Number</th>
    <th class="p-1 mb-2 bg-secondary text-white">DLR. No.</th>
    <th class="p-1 mb-2 bg-secondary text-white">MV Plate No.</th>
    <th class="p-1 mb-2 bg-secondary text-white">Make of the Vehicle</th>
    <th class="p-1 mb-2 bg-secondary text-white">Type of Body</th>
    <th class="p-1 mb-2 bg-secondary text-white">Year Model</th>
    <th class="p-1 mb-2 bg-secondary text-white">Motor No. </th>
    <th class="p-1 mb-2 bg-secondary text-white">Chassis Number</th>
    <th class="p-1 mb-2 bg-secondary text-white">Violations</th>
    <th class="p-1 mb-2 bg-secondary text-white">Vehicle/Tool Lists</th>
  </tr>
        @foreach($moto_vehicle as $item)
  <tr>
    <td class="p-1 mb-2 text-white">{{ $loop->iteration }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->ownerofthevehicle }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->completeaddress }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->telephonenumber }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->completenameofthedriver}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->license_number}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->dlrno}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->mvplateno}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->makeofthevehicle}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->typeofthebody}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->yearmodel}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->motono}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->chassisnumber}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->violations}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->vehicle}}</td>


  </tr>
  @endforeach
</table>

</body>
</html>


