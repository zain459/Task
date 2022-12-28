<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <title>Edit-customer</title>
</head>
<body>
<a href="{{ url('customer') }}"  class="btn btn-primary float-righ ml-50px ">Back</a 

   <div class="card">
  <div class="card-body">
  <div class="container mt-5">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6">

                    <form action="{{route('updateCustomerList',$customers->id)}}" method="POST">
                        @csrf
                        
                        <div class="form-group sm-4">
    <label for="name " style="margin-top: 10px;">Name</label>
    <input type="name" style="margin-top: 10px;" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter name" name="name" value="{{$customers->name}}">
   
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputCity" style="margin-top: 10px;">Address</label>
    <input type="address" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address" value="{{$customers->address}}">
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputPhone" style="margin-top: 10px;">Image</label>
    <!-- <input type="file" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter description" name="image" value="{{$customers->image}}"> -->
    <img src="<?php echo asset("storage/app/images/$customers->image")?>" style="width: 100%; height: 100%;"></img>
  </div>
  
  <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Update Customer</button>
</form>





                    </div>
                   

            </div>
            </div>
</div>
  </div>
</div>

</body>

</html>

