<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <title>Posts</title>
</head>
<body>

<a href="{{ url('home') }}"  class="btn btn-primary float-righ ml-50px ">Back</a>

<div class="container mt-5">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6">

                    <form action="{{route('postsList')}}" method="POST">
                        @csrf
                        <label for="exampleInputCity" style="margin-bottom: 10px;">Customer ID </label>
                        <select class="form-select" aria-label="Default select example" name="customer_id">
                        @foreach($customers as $customer)
                          <option value="{{$customer->id}}">{{$customer->id}}</option>
                    @endforeach
  
                        </select>
  
                        
  <div class="form-group sm-4">
    <label for="exampleInputCity" style="margin-top: 10px;">Title</label>
    <input type="Title" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter title" name="title" required >
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputPhone" style="margin-top: 10px;">Discription</label>
    <input type="discription" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter description" name="discription" required >
  </div>
  
  <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Add</button>
</form>





                    </div>
                    <div class="col-sm-6 mr-6">
                      <table class="table table-hower">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CUSTOMER NAME</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">DRSCRIPTION</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($post as $po)
                          <tr>
                          
                            <th>{{$po->id}}</th>
                            <td>{{$po->customer->name }}</td>
                            <td>{{$po->title}}</td>
                            <td>{{$po->discription}}</td>

                            
                            

                            <td>
                            <a href="{{route('edit-posts',$po->id,$customer->id)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit your Data">EDIT</a>
                            </td>
                            <td>
                            <a href="{{route('delete-posts',$po->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                          </tr>
                          @endforeach

                        
                        </tbody>
                            
                      </table>
                      
                          
                        </thead>
                        
                        
                        {{$post->links('pagination::bootstrap-4')}}
                        

                        
                        
                </div>
                
                

            </div>
            </div>
</div>


</body>

