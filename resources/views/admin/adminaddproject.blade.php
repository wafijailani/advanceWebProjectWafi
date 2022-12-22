<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.admincss")
</head>
<body>
@include("admin.navbar")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add Student and Project</h4>
                </div>
                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-body">

                    <form action="{{ url('/addproj') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Student ID</label>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="studentname" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project Title</label>
                            <input type="text" name="projecttitle" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Supervisor</label>
                            <select name="supervisor" class="js-example-basic-single" style="width: 100%;">
                            @foreach($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Examiner 1 </label>
                            <select name="examiner1" class="js-example-basic-single" style="width: 100%;">
                            @foreach($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Examiner 2</label>
                            <select name="examiner2" class="js-example-basic-single" style="width: 100%;>
                            @foreach($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@include("admin.script")  
</body>
</html>
</x-app-layout>
