@extends('backend.layout')
@section('content')


<section>
	<div class="edithome_sectionPosition">

		<form role="form" action="/gallery" method="post">
			<label>Add Artwork Image</label>
		
			<div class="form-group">	
    			<input type="file" class="form-control" size="30">
  			</div>
  		
			<div class="form-group">	
    			<input type="text" class="form-control" id="comment" placeholder="Title . . ." size="30">
  			</div>
  			
  			<div class="form-group">
  				<textarea class="form-control" rows="8" id="comment" placeholder="Description" ></textarea>
			</div>
  
  			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Done</button>
  			<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp;Cancel</button>
		</form>
</div>
</section>
@stop