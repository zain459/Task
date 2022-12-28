<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <title>Edit-list</title>
</head>
<body>

<div class="card">
  <div class="card-body">
  <div class="container mt-5">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6">

                    <form action="{{route('update-list',$lists->id)}}" method="POST">
                        @csrf
                        
  <div class="form-group sm-4">
    <label for="name " style="margin-top: 10px;">Title</label>
    <input type="title" style="margin-top: 10px;" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter title" name="title" value="{{$lists->title}}">
   
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputCity" style="margin-top: 10px;">URL</label>
    <input type="url" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter url" name="url" value="{{$lists->url}}">
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputPhone" style="margin-top: 10px;">Description</label>
    <input type="description" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter description" name="description" value="{{$lists->description}}">
  </div>
  
  <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Update</button>
</form>





                    </div>
                   

            </div>
            </div>
</div>
  </div>
</div>

</body>

</html>