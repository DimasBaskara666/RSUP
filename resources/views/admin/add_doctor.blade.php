<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding: 120px 20px 80px 25px;">
        <div class="container" style="padding: 20px; color: #6C7293; border-width: 0.1rem; border-radius: 20px; border-color:#6C7293; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);">
                @if(session()->has('message'))
                
                <div class="alert alert-success">
                    <button type="button" class="close" data-bs-dismiss="alert">
                        x
                    </button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div style="font:bold; font-size: 3rem; padding: 15px 0px 0px 60px;">
                    <h1>Doctor Enrollment Form</h1>
                </div>
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                
                @csrf
                
                    <div style="padding: 40px 60px 15px 60px;" class="input-group">
                      <label class="input-group-text">Doctor Name</label>
                      <textarea class="form-control" aria-label="With textarea" name="name" placeholder="Write the name"></textarea>
                    </div>
                    <div style="padding: 15px 60px 15px 60px;" class="input-group">
                      <label class="input-group-text">Phone</label>
                      <textarea class="form-control" aria-label="With textarea" name="number" placeholder="Write the number"></textarea>
                    </div>
                    <div style="padding: 15px 60px 15px 60px;" class="input-group">
                      <label class="input-group-text">Room No</label>
                      <textarea class="form-control" aria-label="With textarea" name="room" placeholder="Write the room number"></textarea>
                    </div>
                    <div style="padding: 15px 60px 15px 60px;">
                    <select name="speciality" class="form-select form-select-lg mb-3" aria-label="Large select example">
                        <option selected>Speciality</option>
                        <option>--Select--</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>
                    </select>
                    </div>
                    <div style="padding: 0px 60px 15px 60px;">
                       <label for="formFileLg" class="form-label">Doctor Image</label>
                       <input style=" background: white; border-radius:2rem; width: 20rem;" class="form-control form-control-lg" id="formFileLg" type="file" name="file">
                       <input style="font-size: 25px; margin-left:44.5rem; margin-top:-4.8rem;" type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>