@extends('main')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Book Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('books.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Title</b></label>
			<div class="col-sm-10">
				{{ $book->book_title }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Publisher</b></label>
			<div class="col-sm-10">
				{{ $book->book_publisher }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Author/s</b></label>
			<div class="col-sm-10">
				{{ $book->book_author }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Year Published</b></label>
			<div class="col-sm-10">
				{{ $book->book_year }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Volume</b></label>
			<div class="col-sm-10">
				{{ $book->book_volume }}
			</div>
		</div>
	</div>
</div>

@endsection('content')