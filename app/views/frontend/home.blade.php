@extends('frontend.layout')
@section('content')

<br>
	<a href="/addview">Add new user</a><br />
	
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
		
		<?php 	foreach($genesis as $data):?>
			<tr>
				<td><?php echo $data->id; ?></td>
				<td><?php echo $data->name; ?></td>
				<td>
					<a href="/delete<?php echo $data->id?>">delete</a> |
					<a href="/edit<?php echo $data->id?>">Edit</a></td>
			</tr>
		
		<?php endforeach;?>
		</tbody>
	</table>
	
		
		
<br>

@stop