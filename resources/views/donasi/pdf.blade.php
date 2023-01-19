<html>
<head>
	<title>Laporan PDF Donasi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan PDF Donasi</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama User</th>
                <th>Nama Hewan</th>
                <th>Jenis Hewan</th>
                <th>Lokasi</th>
                <th>Alasan</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($donasi as $item)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$item->user->name}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jenis}}</td>
                <td>{{$item->lokasi}}</td>
                <td>{{$item->alasan}}</td>
                <td>{{$item->st}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>