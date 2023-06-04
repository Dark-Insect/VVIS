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

<h2>VEHICLE INFORMATION</h2>

<table>
  <tr class="title">
    <th class="p-2 mb-2 bg-secondary text-white">ID</th>
    <th class="p-1 mb-2 bg-secondary text-white">Tag Date</th>
    <th class="p-1 mb-2 bg-secondary text-white">Tag State</th>
    <th class="p-1 mb-2 bg-secondary text-white">Make</th>
    <th class="p-1 mb-2 bg-secondary text-white">Model</th>
    <th class="p-1 mb-2 bg-secondary text-white">Year</th>
    <th class="p-1 mb-2 bg-secondary text-white">Insurance Company</th>
    <th class="p-1 mb-2 bg-secondary text-white">Policy Number</th>
  </tr>
        @foreach($vehicle_information as $item)
  <tr>
    <td class="p-1 mb-2 text-white">{{ $loop->iteration }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->tagdate }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->tagstate }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->make }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->model}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->year }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->insurance_company }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->policy_number}}</td>

  </tr>
  @endforeach
</table>

</body>
</html>

