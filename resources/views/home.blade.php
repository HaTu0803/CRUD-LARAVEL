<!DOCTYPE>
<html>

<head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container">
        <h1 class="page-header text-center">PHP CRUD using Eloquent ORM in Laravel</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a href="{{ route('create') }}" class="btn btn-primary">Create Student</a>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" style="margin-top:20px;">
                        <thead>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Date Of Birth</th>
                            <th>Emal</th>
                            <th>Score</th>
                            <th>Action</th>

                        </thead>
                        <tbody>
                            @foreach($students as $stu)
                            <tr>
                                <td>{{$stu->id}}</td>
                                <td>{{$stu->fullname}}</td>
                                <td>{{$stu->dob}}</td>
                                <td>{{$stu->email}}</td>
                                <td>{{$stu->score}}</td>
                                <td>
                                    <a href="{{ route('edit', ['id' => $stu->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $stu->id }}">Delete</button>
                                </td>
                            </tr>
                            @include('delete', ['student' => $stu])

                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>



</body>

</html>