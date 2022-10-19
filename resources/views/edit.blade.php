@extends('main')

@section('content')

<div class="card">
	<div class="card-header"><b>Edit Book Data</b></div>
	<div class="card-body">
		<form method="post" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Title</label>
				<div class="col-sm-10">
					<input type="text" name="book_title" class="form-control" value="{{ $book->book_title }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Publisher</label>
				<div class="col-sm-10">
					<input type="text" name="book_publisher" class="form-control" value="{{ $book->book_publisher }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Author/s</label>
				<div class="col-sm-10">
					<input type="text" name="book_author" class="form-control" value="{{ $book->book_author }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Year Published</label>
				<div class="col-sm-10">
					<input type="year" name="book_year" class="form-control" value="{{ $book->book_year }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Volume</label>
				<div class="col-sm-10">
					<input type="integer" name="book_volume" class="form-control" value="{{ $book->book_volume }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $book->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')