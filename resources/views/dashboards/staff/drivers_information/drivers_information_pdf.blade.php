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

<h2>DRIVER'S INFORMATION </h2>

<table>
  <tr class="title">
    <th class="p-2 mb-2 bg-secondary text-white">ID</th>
    <th class="p-1 mb-2 bg-secondary text-white">Name</th>
    <th class="p-1 mb-2 bg-secondary text-white">Address</th>
    <th class="p-1 mb-2 bg-secondary text-white">ZipCode</th>
    <th class="p-1 mb-2 bg-secondary text-white">HomePhone</th>
    <th class="p-1 mb-2 bg-secondary text-white">Birthday</th>
    <th class="p-1 mb-2 bg-secondary text-white">Driver's License</th>
    <th class="p-1 mb-2 bg-secondary text-white">Driver's State</th>
    <th class="p-1 mb-2 bg-secondary text-white">Injury Type</th>
  </tr>
        @foreach($drivers_information as $item)
  <tr>
    <td class="p-1 mb-2 text-white">{{ $loop->iteration }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->name }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->address }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->zipcode }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->homephone}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->birthday }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->drivers_license }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->drivers_state}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->injury_type}}</td>


  </tr>
  @endforeach
</table>

</body>
</html>


