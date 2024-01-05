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
            <div style="padding-top: 2rem">
                <table class="table">
                    <tr>
                        <th style="padding: 10px; font-size: 15px;">Customer nama</th>
                        <th style="padding: 10px; font-size: 15px;">Phone</th>
                        <th style="padding: 10px; font-size: 15px;">Doctor</th>
                        <th style="padding: 10px; font-size: 15px;">Date</th>
                        <th style="padding: 10px; font-size: 15px;">message</th>
                        <th style="padding: 10px; font-size: 15px;">Status</th>
                        <th style="padding: 10px; font-size: 15px;">Approved</th>
                        <th style="padding: 10px; font-size: 15px;">Canceled</th>
                        <th style="padding: 10px; font-size: 15px;">Send Mail</th>
                    </tr>
                    @foreach($data as $appoint)
                    <tr>
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>
                            <?php
                                $words = explode(" ", $appoint->message);
                                $wordCount = count($words);
                                for ($i = 0; $i < $wordCount; $i++) {
                                    echo $words[$i];
                                    if ($i != $wordCount - 1 && ($i + 1) % 3 == 0) {
                                        echo "<br>";
                                    } else {
                                        echo " ";
                                    }
                                }
                            ?>
                        </td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a style="color:aliceblue;" class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
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
