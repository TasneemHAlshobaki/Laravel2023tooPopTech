@extends('Home.file.mainlayout')


		@section('content')
		
		<h1>Hi </h1>

		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
                        <th>Category Name</th>
    <th>Image</th>
    <th>Activity</th>
						</tr>
					</thead>
					<tbody>
                        
					@foreach ($categorys as $Category)
							<tr>
								
                                <td>{{ $Category->name }}</td>
								<td><img src="{{ $category->image_url }}" width="150px"></td>
    							<td>{{  $Category->activity  }}</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>

		@stop
