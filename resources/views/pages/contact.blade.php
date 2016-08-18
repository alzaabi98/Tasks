@extends('layouts.master')

@section('title')
	<h1> Contact Page </h1>
@stop

@section('content')

	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam sint adipisci cum vero consequuntur voluptates iure enim sapiente commodi nemo. Odio temporibus recusandae ab perspiciatis quia eius impedit totam atque.
	</p>

	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem adipisci, voluptas assumenda repudiandae amet quasi perferendis tenetur ullam maxime harum quod nam, placeat in, similique magni doloremque ipsum, animi accusamus.
	</p>
	
	<br/>
	<hr>

	<form role="form">
		<div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email">
		</div>

		<div>
			<label for="msg">Message:</label>
			<textarea class="form-control" rows="3"></textarea>
	  	</div>
		
		<button type="submit" class="btn btn-default">Send</button>
		</form>


@stop