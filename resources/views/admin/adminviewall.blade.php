<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  @include("admin.navbar")

      <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                    <h4 class="card-title">View All Projects</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Project Title</th>
                            <th>Supervisor</th>
                            <th>Examiner1</th>
                            <th>Examiner2</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Project Progress</th>
                            <th>Project Status</th>

                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                @foreach($items as $item)
                <td>{{$item->id}}</td>
                <td>{{$item->studentname}}</td>
                <td>{{$item->projecttitle}}</td>
                <td>{{$item->supervisor}}</td>
                <td>{{$item->examiner1}}</td>
                <td>{{$item->examiner2}}</td>
                <td>{{$item->startdate}}</td>
                <td>{{$item->enddate}}</td>
                <td>{{$item->progress}}</td>
                <td>{{$item->status}}</td>
                <td><a href="{{ url('adminedit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="{{ url('admindelete/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                
            </tr>
            @endforeach
                        </tbody>
                      </table>
                      {{ $items->links() }}
                    </div>
                  </div>
                </div>
              </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    @include("admin.script")
  </body>
</html>