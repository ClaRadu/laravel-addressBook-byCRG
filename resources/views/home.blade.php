@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Addres Book
					<!-- Add new element button -->
					<div class='contaner pull-right'>
						<form action="{{ url('/book/add/' . Auth::user()->id) }}" method="get">
							<button type="submit" id="add-new-book" class="btn btn-primary">
								Add new
							</button>
						</form>
					</div>
					<br><br>
				</div>

				<div class="panel-body" style='color:gray;'>
					Welcome {{ Auth::user()->name }}, you are logged in!
				</div>
				
				<!-- Search bar -->
				<div class="panel-body" style='background-color:lightgray;'>
					<form action="{{ url('home/src') }}" method="post">
						<span class="glyphicon glyphicon-search"></span>
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
						<input type="text" name="src_query" placeholder=" Search..."/>
						<input type="submit" value="Search" class="btn btn-light"/>
					</form>
				</div>
				
				<br>
				
				@if (count($books) > 0)
					<table class="table table-striped task-table" border=0>
						@foreach ($books as $book)
						<tr>
							<td class="table-text">{{ $book->name }}</td>
							<td class="table-text">{{ $book->email }}</td>
							<td class="table-text">{{ $book->address }}</td>
							<td class="table-text">{{ $book->country }}</td>
							<td class="table-text">{{ $book->phone }}</td>
						
							<!-- Modify button -->
							<td>
								<a href='book/edit/{{ $book->id }}' class='btn btn-info'>Update</a>
							</td>
						
							<!-- Delete link/button -->
							<td>
								<a href='book/del/{{ $book->id }}' class='btn btn-danger'>Delete</a>
							</td>
						</tr>
						@endforeach
					</table>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
