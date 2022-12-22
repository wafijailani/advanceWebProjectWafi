<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
@include("staff.staffcss")
</head>
<body>
@include("staff.staffnavbar")
<div class="col-md-6 d-flex align-items-stretch">
                <div class="row">
                  <div class="col-md-10 grid-margin">
                    <div class="card">
                      <div class="card-body">
                      <div class="template-demo">
                      <h1>Welcome to FYP Management System (Lecturer's Side)</h1>
                      <h4 class="card-title">Created by Abdul Wafi Jailani</h4>
                        </div>
                        <p>There are a few functions in this system</p>
                        <p>1. You will be able to view students and projects that are assigned under you.</p>
                        <p>2. You will be able to update project informations if you are assigned as their supervisor.</p>
                        <p>3. You will be able to view projects that you are assigned as examiner.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   
@include("staff.staffscript")
</body>
</html>
