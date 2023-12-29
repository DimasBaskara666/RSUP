<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial  style="background-color: #161B6D;"  style="background-color: #11144F;" -->
        <div class="container-fluid page-body-wrapper">
            <div style="padding-top: 20px">
                <table class="table">
                    <tr>
                        <th style="padding: 10px;">Customer nama</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Doctor</th>
                        <th style="padding: 10px;">Date</th>
                        <th style="padding: 10px;">message</th>
                        <th style="padding: 10px;">Status</th>
                        <th style="padding: 10px;">Approved</th>
                        <th style="padding: 10px;">Canceled</th>
                    </tr>
                    @foreach($data as $appoint)
                    <tr align="center">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>