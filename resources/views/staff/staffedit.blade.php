<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
@include("staff.staffcss")
</head>
<body>
@include("staff.staffnavbar")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-header">
                        <h4>Update Student Project Details</h4>
                    </div>
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            
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
                            <input type="date"  name="startdate" value="{{$student->startdate}}" min="2022-01-01" max="2024-12-31" class="form-control"> 
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project End Date</label>
                            <input type="date"  name="enddate" value="{{$student->enddate}}" min="2022-01-01" max="2024-12-31" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Project Progress</label>
                        <select name="progress" class="js-example-basic-single" style="width: 100%;">
                        <option selected value="{{$student->progress}}">Current Status : {{$student->progress}}</option>
                        <option value="Milestone 1">Milestone 1</option>
                        <option value="Milestone 2">Milestone 2</option>
                        <option value="Final Report">Final Report</option>
                        </select>
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Project Status</label>
                        <select name="status" class="js-example-basic-single" style="width: 100%;">
                        <option selected value="{{$student->status}}">Current Status : {{$student->status}}</option>
                        <option value="On Track">On Track</option>
                        <option value="Delayed">Delayed</option>
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
@include("staff.staffscript")
</body>
</html>