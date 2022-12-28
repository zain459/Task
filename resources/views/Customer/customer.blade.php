<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <title>Customer</title>
</head>
<body>

<a href="{{ url('home') }}"  class="btn btn-primary float-righ ml-50px ">Back</a>

<div class="container mt-5">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6">

                    <form action="{{route('customerList')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        
  <div class="form-group sm-4">
    <label for="name " style="margin-top: 10px;">Name</label>
    <input type="name" style="margin-top: 10px;" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter name" name="name" required >
             @if ($errors->has('name'))
                          <div class="error">{{ $errors->first('name') }}</div>
                            
                          @endif
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputCity" style="margin-top: 10px;">Address</label>
    <input type="address" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address" required >
    @if ($errors->has('url'))
                          <div class="error">{{ $errors->first('address') }}</div>
                            
                          @endif
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputPhone" style="margin-top: 10px;">Image</label>
    <input type="file" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter description" name="image" required >
    @if ($errors->has('url'))
                          <div class="error">{{ $errors->first('image') }}</div>
                            
                          @endif
  </div>
  
  <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Add</button>
</form>





                    </div>
                    <div class="col-sm-6 mr-6">
                      <table class="table table-hower">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">IMAGE</th>
                          </tr>
                        </thead>
                            <tbody>
                          @foreach ($customers as $li)
                          <tr>
                            <th>{{$li->id}}</th>
                            <td>{{$li->name}}</td>
                            <td>{{$li->address}}</td>
                            <td>{{$li->image}}</td>
                            

                            <td>
                            <a href="{{route('editCustomerList',$li->id)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit your Data">EDIT</a>
                            </td>
                            <td>
                            <a href="{{route('delete',$li->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                          </tr>
                          @endforeach

                        
                        </tbody>
                      </table>
                      
                      {{$customers->links('pagination::bootstrap-4')}}
                        </thead>

                        
                        
                </div>
                
                

            </div>
            </div>
</div>


</body>
</html>