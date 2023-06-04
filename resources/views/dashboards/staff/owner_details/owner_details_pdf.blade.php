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

<h2>OWNER DETAILS</h2>

<table>
  <tr class="title">
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
  </tr>
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
  </tr>
  @endforeach
</table>

</body>
</html>

