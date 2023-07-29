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

				<form action="{{ URL('book/store') }}" method="POST" enctype="multipart/form-data">

					@csrf

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="..." class="form-control">
					</div>
					<div class="form-group">
						<label>Auther Name</label>
						<input type="text" name="auther_name" placeholder="Ali S. Rtmb" class="form-control">
					</div>
                    <div class="form-group">
						<label>Description</label>
                        <textarea rows="5" cols="60" name="description" placeholder="..." class="form-control"></textarea>
					</div>
                    <div class="form-group">
						<label>Date Of Publication</label>
						<input type="date" name="date_of_publication"  placeholder="16/5/2003" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Category</label>
						<select name="category_id" class="form-control">
							@foreach ($categorys as $category)
								<opption value="{{ $category_id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
                    <div class="form-group">
						<label>Price</label>
						<input type="number" name="price" placeholder="20.5" class="form-control">
					</div>

					

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>

        @stop