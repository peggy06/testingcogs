@extends('backend.layout')
@section('content')

			<?php echo $_SESSION["session_testing"]; ?>
<section>

<div class="edithome_sectionPosition">

	<form role="form" action="/admin" method="post">
		<label>Home Edit</label>
		<div class="form-group">	
    		<input type="text" class="form-control" id="comment" placeholder="Title . . ." size="30">
  		</div>
  		<div class="form-group">
  			<textarea class="form-control" rows="8" id="comment" placeholder="Whats on your mind ?" ></textarea>
		</div>
  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Done</button>
  
  <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp;Cancel</button>
</form>
</div>
</section>

@stop