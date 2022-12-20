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
            <table border = "border">
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Project Title</td>
                <td>Supervisor</td>
                <td>Examiner 1</td>
                <td>Examiner 2</td>
            </tr>
            <tr>
                @foreach($items as $item)
                <td>{{$item->studentid}}</td>
                <td>{{$item->studentname}}</td>
                <td>{{$item->projecttitle}}</td>
                <td>{{$item->supervisor}}</td>
                <td>{{$item->examiner1}}</td>
                <td>{{$item->examiner2}}</td>
                
            </tr>
            @endforeach


            </table>
</body>
</html>
</x-app-layout>
