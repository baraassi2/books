@extends('Books.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('Books.update', $Book->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">book Name</label>
				<div class="col-sm-10">
					<input type="text" name="book_name" class="form-control" value="{{ $Book->book_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">book id</label>
				<div class="col-sm-10">
					<input type="text" name="book_id" class="form-control" value="{{ $Book->book_id }}" />
				</div>
			</div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"> Writers</label>
                <div class="col-sm-10">
                    <select name="Writers" class="form-control">
                        <option value="عمر">عمر</option>
                        <option value="ولاء">ولاء</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"> Publishers</label>
                <div class="col-sm-10">
                    <select name="Publishers" class="form-control">
                        <option value="يوسف">يوسف</option>
                        <option value="انس">انس</option>
                    </select>
                </div>
            </div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Gender</label>
				<div class="col-sm-10">
					<select name="gender" class="form-control">
						<option value="ذكر">ذكر</option>
						<option value="انثى">انثى</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">book Image</label>
				<div class="col-sm-10">
					<input type="file" name="book_image" />
					<br />
					<img src="{{ asset('images/' . $Book->book_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_book_image" value="{{ $Book->book_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $Book->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>
<script>
document.getElementsByName('gender')[0].value = "{{ $Book->gender }}";
</script>

@endsection('content')
