@extends('main')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Book Data</div>
	<div class="card-body">
		<form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Title</label>
				<div class="col-sm-10">
					<input type="text" name="book_title" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Publisher</label>
				<div class="col-sm-10">
					<input type="text" name="book_publisher" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Author/s</label>
				<div class="col-sm-10">
					<input type="text" name="book_author" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Year Published</label>
				<div class="col-sm-10">
					<input type="year" name="book_year" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Volume</label>
				<div class="col-sm-10">
					<input type="integer" name="book_volume" class="form-control" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')