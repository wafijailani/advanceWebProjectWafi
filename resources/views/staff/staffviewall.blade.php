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
            <a class="nav-link" href="/viewstaffproj">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">View Projects as Supervisor</span>
            </a>
          </li>

   
          <li class="nav-item menu-items">
            <a class="nav-link" href="/viewstaffexaminer">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">View Projects as Examiner</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/staffedit">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Update Projects as Supervisor</span>
            </a>
          </li>
</ul>
</nav>
            <table border = "border">
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Project Title</td>
                <td>Supervisor</td>
                <td>Examiner 1</td>
                <td>Examiner 2</td>

              <tr>
                @foreach($items as $item)
                <td>{{$item->id}}</td>
                <td>{{$item->studentname}}</td>
                <td>{{$item->projecttitle}}</td>
                <td>{{$item->supervisor}}</td>
                <td>{{$item->examiner1}}</td>
                <td>{{$item->examiner2}}</td>
                <td><a href="{{ url('staffedit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
            @endforeach
            </table>
</body>
</html>
</x-app-layout>