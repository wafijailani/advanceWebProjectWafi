<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="users">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">View All Projects</span>
            </a>
          </li>

   
          <li class="nav-item menu-items">
            <a class="nav-link" href="addproject">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Create Project and Assign</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Chefs</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Reservations</span>
            </a>
          </li>
</ul>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4>
                </div>
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
                            <select name="supervisor" class="form-control">
                            @foreach($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Examiner 1 </label>
                            <select name="examiner1" class="form-control">
                            @foreach($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Examiner 2</label>
                            <select name="examiner2" class="form-control">
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
          
</body>
</html>
</x-app-layout>
