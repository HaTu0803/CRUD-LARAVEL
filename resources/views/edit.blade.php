<!DOCTYPE>
<html>

<head>
	<title>Stgudent CRUD</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container mt-5">

		<h2>Edit Student</h2>
		<div class="row">
			<div class="col-md-6">
				<form id="editForm" action="{{ route('update', ['id' => $student->id]) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="id">id</label>
						<input type="text" name="id" class="form-control" value="{{ $student->id }}" disabled>
					</div>
					<div class="form-group">
						<label for="fullname">Fullname</label>
						<input type="text" name="fullname" class="form-control" value="{{ $student->fullname }}" required>
					</div>
					<div class="form-group">
						<label for="dob">Date of Birth</label>
						<input type="date" name="dob" class="form-control" value="{{ $student->dob }}" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
					</div>
					<div class="form-group">
						<label for="score">Score</label>
						<input type="number" name="score" class="form-control" value="{{ $student->score }}" max="10" step="0.1" required>
					</div>
					<button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Update</a>
				</form>
			</div>
		</div>
	</div>

</body>

</html>