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

<h2>CONFORME</h2>

<table>
  <tr class="title">
    <th class="p-2 mb-2 bg-secondary text-white">ID</th>
    <th class="p-1 mb-2 bg-secondary text-white">Owner/Driver</th>
    <th class="p-1 mb-2 bg-secondary text-white">Apprehending Officer(s)</th>
    <th class="p-1 mb-2 bg-secondary text-white">Agency/Office</th>
    <th class="p-1 mb-2 bg-secondary text-white">MV Turned Over</th>
    <th class="p-1 mb-2 bg-secondary text-white">Destination</th>
    <th class="p-1 mb-2 bg-secondary text-white">Chief,(Traffic Management Office)</th>
    <th class="p-1 mb-2 bg-secondary text-white">Time</th>
    <th class="p-1 mb-2 bg-secondary text-white">Date</th>
    <th class="p-1 mb-2 bg-secondary text-white">Name of Witness</th>
    <th class="p-1 mb-2 bg-secondary text-white">Address</th>
  </tr>
        @foreach($conforme as $item)
  <tr>
    <td class="p-1 mb-2 text-white">{{ $loop->iteration }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->owner_driver }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->apprehending_officers}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->agency_office }}</td>
    <td class="p-1 mb-2 text-white">{{ $item->mvturnedover}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->destination}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->chief}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->time}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->date}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->nameofwitness}}</td>
    <td class="p-1 mb-2 text-white">{{ $item->address}}</td>


  </tr>
  @endforeach
</table>

</body>
</html>


