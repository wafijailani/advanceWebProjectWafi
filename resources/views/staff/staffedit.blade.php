<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-body">

                    <form action="{{ url('update/'.$student->id) }}" method="POST">

                    
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Student ID</label>
                            <input type="text" name="id" value="{{$student->id}}" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="studentname" value="{{$student->studentname}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project Title</label>
                            <input type="text" name="projecttitle" value="{{$student->projecttitle}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project Start Date</label>
                            <input type="date"  name="startdate" value="{{$student->startdate}}" min="2022-01-01" max="2024-12-31">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project End Date</label>
                            <input type="date"  name="enddate" value="{{$student->enddate}}" min="2022-01-01" max="2024-12-31">
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Project Progress</label>
                        <select name="progress" class="form-control">
                        <option value="Milestone 1">Milestone 1</option>
                        <option value="Milestone 2">Milestone 2</option>
                        <option value="Final Report">Final Report</option>
                        </select>
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Project Status</label>
                        <select name="status" class="form-control">
                        <option value="On Track">On Track</option>
                        <option value="Delayed">Delayed</option>
                        <option value="Extended">Extended</option>
                        <option value="Completed">Completed</option>
                        </select>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>