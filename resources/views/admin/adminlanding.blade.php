<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.admincss")
</head>
<body>
@include("admin.navbar")
<div class="col-md-6 d-flex align-items-stretch">
                <div class="row">
                  <div class="col-md-10 grid-margin">
                    <div class="card">
                      <div class="card-body">
                      <div class="template-demo">
                      <h1>Welcome to FYP Management System (FYP Coordinator Side)</h1>
                      <h4 class="card-title">Created by Abdul Wafi Jailani</h4>
                        </div>
                        <p>There are a few functions in this system</p>
                        <p>1. You will be able to view all projects from all students.</p>
                        <p>2. You will be able to delete projects.</p>
                        <p>3. You will be able to add new projects with details and assign to supervisor and examiners.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>    
@include("admin.script")          
</body>
</html>

