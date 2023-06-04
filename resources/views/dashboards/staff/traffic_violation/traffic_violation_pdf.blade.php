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

<h2>TRAFFIC VIOLATION CITATION TICKET </h2>

<table>
  <tr class="title">
    <th class="p-2 mb-2 bg-secondary text-white">ID</th>
    <th class="p-1 mb-2 bg-secondary text-white">Name</th>
    <th class="p-1 mb-2 bg-secondary text-white">Address</th>
    <th class="p-1 mb-2 bg-secondary text-white">Type</th>
    <th class="p-1 mb-2 bg-secondary text-white">Driver's License No.</th>
    <th class="p-1 mb-2 bg-secondary text-white">Registration No.</th>
    <th class="p-1 mb-2 bg-secondary text-white">Official Receipt</th>
    <th class="p-1 mb-2 bg-secondary text-white">Make</th>
    <th class="p-1 mb-2 bg-secondary text-white">Plate</th>
    <th class="p-1 mb-2 bg-secondary text-white">Owner</th>
    <th class="p-1 mb-2 bg-secondary text-white">Following Violations</th>
  </tr>
        @foreach($traffic_violation as $item)
  <tr>
    <td class="p-1 mb-2 text-white">{{ $loop->iteration }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->name }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->address }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->type }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->drivers_license_no}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->registration_no}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->official_receipt}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->make}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->plate}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->owner}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->following_violations}}</td>


  </tr>
  @endforeach
</table>

</body>
</html>


