@extends('Home.file.mainlayout')


		@section('content')
		
		<h1>Hi </h1>

		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
                        <th>Book Name</th>
    <th>Author Name</th>
    <th>Category Name</th>
    <th>Date Of Publication</th>
    <th>Description</th>
    <th>Price</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($books as $book)
						
							<tr>
								
                                <td>{{ $book->name }}</td>
    <td>{{ $book->auther_name }}</td>
    <td>{{ $book->category->name ?? null }}</td>
    <td>{{ $book->date_of_publication }}</td>
    <td>{{ $book->description }}</td>
    <td>{{ $book->price }}</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>

		@stop
