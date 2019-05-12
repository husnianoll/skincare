@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@section('content')
	<a href="createcat">Create New Category</a>
<table border="1">
	<th>Id Category</th>
	<th>Category</th>
	<th>Action</th>
@foreach($cat as $i)
 <tr>
 	<td>{{ $i->id_category }}</td>
 	<td>{{ $i->category }}</td>
 	<td>
 		<button type="submit" class="btn btn-default btn-info"<a href="#"> Edit</a></button>
 		|
 		<form action="{{route('category.destroy',$i->id_category)}}" method="post">
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