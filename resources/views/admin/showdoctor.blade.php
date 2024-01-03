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
      <!-- partial -->
      
      <div class="container-fluid page-body-wrapper">
        <div style="padding-top: 20px">
             <table class="table">
                    <tr> 
                        <th style="padding-right: 70px; font-size: 20px;">Doctor Name</th>
                        <th style="padding-right: 70px; font-size: 20px;">Phone</th>
                        <th style="padding-right: 70px; font-size: 20px;">Speciality</th>
                        <th style="padding-right: 70px; font-size: 20px;">Room No</th>
                        <th style="padding-right: 70px; font-size: 20px;">Image</th>
                        <th style="padding-right: 70px; font-size: 20px;">Delete</th>
                        <th style="padding-right: 70px; font-size: 20px;">Update</th>
                    </tr>
                    @foreach($data as $doctor)
                    <tr>
                        <td style="font-size: 15px;">{{$doctor->name}}</td>
                        <td style="font-size: 15px;">{{$doctor->phone}}</td>
                        <td style="font-size: 15px;">{{$doctor->speciality}}</td>
                        <td style="font-size: 15px;">{{$doctor->room}}</td>
                        <td><img style="height: 100px; width: 100px;" src="doctorimage/{{$doctor->image}}" alt=""></td>
                        <td><a style="font-size: 15px;" onclick="return confirm('are you sure about this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                        <td><a style="font-size: 15px;" class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    </tr>
                    @endforeach
        </div>
        
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>