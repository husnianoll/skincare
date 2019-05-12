@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@section('content')

	 <a href="create">Create New Item</a>
<table border="1">
	<th>Id Item</th>
	<th>Id Category</th>
	<th>Nama Item</th>
	<th>Stok</th>
	<th>Harga</th>
	<th>Satuan</th>
	<th>Action</th>
@foreach($item as $i)
 <tr>
 	<td>{{ $i->id_item }}</td>
 	<td>{{ $i->id_category }}</td>
 	<td>{{ $i->nama_item }}</td>
 	<td>{{ $i->stok }}</td>
 	<td>{{ $i->harga }}</td>
 	<td>{{ $i->satuan }}</td>
 	<td>
 		<button type="submit" class="btn btn-default btn-info"<a href="#"> Edit</a></button>
 		|
 		<form action="{{route('admin.destroy',$i->id_item)}}" method="post">
 			{{csrf_field()}}
 			{{method_field('DELETE')}}
 			<button type="submit" class="btn tbn-default btn-danger" style="color: white">Hapus</button>
 			
 		</form>
 			
 	</td>
 @endforeach

 </table>
@endsection
</body>
</html>