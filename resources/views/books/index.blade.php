@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Addresses:
                </div>

                <div class="panel-body">
					<table class="table table-striped task-table" border=0>
					<tr><th>id</th><th>name</th><th>edit</th><th>del</th></tr>
					@foreach ($books as $book)
					<tr>
						<td class="table-text">{{ $book->id }}</td>
						<td class="table-text">{{ $book->name }}</td>
						<!-- modif-->
						<td><a href='book/edit/{{ $book->id }}'>Edit</a></td>
						<!-- del-->
						<td><a href='book/del/{{ $book->id }}'>Delete</a></td>
					</tr>
					@endforeach
					</table>
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                </div>
            </div>
        </div>
    </div>
@endsection
