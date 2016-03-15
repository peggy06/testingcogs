@extends('frontend.layout')
@section('content')

<form action="<?php echo ($page=='Add')? "/add" : "/update".$id.""; ?>" method="post">
	<input type="text" name="txtname" value="<?php echo (isset($name)) ? $name : "";?>" placeholder="Input name" />
	<input type="submit" name="submit" value="marcus"/>
</form>

@stop