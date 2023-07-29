@extends('Home.file.mainlayout')


		@section('content')
        <div class="row">
			<div class="col-12">
				@foreach ($errors->all() as $message)
					<div class="alert alert-danger">{{ $message }}</div>
				@endforeach
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">

				<form action="{{route('b_test)}}" method="POST" enctype="multipart/form-data">

					@csrf

					<div class="form-group">
						<label>Category Name</label>
						<input type="text" name="name" class="form-control">
					</div>
			
					<div class="form-group">
						<label>Activity</label>
						<select name="activity" class="form-control">
							
								<opption value="1">Yes</option>
                                <opption value="0">No</option>
							
						</select>
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>

        @stop