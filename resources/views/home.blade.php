<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <title>Home</title>
</head>
<body>
 

<div >
                                    <a class=" btn btn-primary float-righ ml-50px" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

<div class="container mt-5">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6">

                    <form action="{{route('createList')}}" method="POST">
                        @csrf
                        
  <div class="form-group sm-4">
    <label for="name " style="margin-top: 10px;">Title</label>
    <input type="title" style="margin-top: 10px;" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter title" name="title" required >
   
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputCity" style="margin-top: 10px;">URL</label>
    <input type="url" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter url" name="url" required >
    @if ($errors->has('url'))
                          <div class="error">{{ $errors->first('url') }}</div>
                            
                          @endif
  </div>
  <div class="form-group sm-4">
    <label for="exampleInputPhone" style="margin-top: 10px;">Description</label>
    <input type="description" style="margin-top: 10px;" class="form-control" id="exampleInputPassword1" placeholder="Enter description" name="description" required >
  </div>
  
  <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Add</button>
</form>





                    </div>
                    <div class="col-sm-6 mr-6">
                      <table class="table table-hower">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">URL</th>
                            <th scope="col">DESCRIPTION</th>
                          </tr>
                        </thead>
                            <tbody>
                          @foreach ($lists as $li)
                          <tr>
                            <th>{{$li->id}}</th>
                            <td>{{$li->title}}</td>
                            <td>{{$li->url}}</td>
                            <td>{{$li->description}}</td>
                            

                            <td>
                            <a href="{{route('edit-list',$li->id)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit your Data">EDIT</a>
                            </td>
                            <td>
                            <a href="{{route('delete-list',$li->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                          </tr>
                          @endforeach

                        
                        </tbody>
                      </table>
                      {{$lists->links('pagination::bootstrap-4')}}
                          
                        </thead>

                        
                        
                </div>
                
                <div>
                        <a href="{{url('customer')}}" class="btn btn-primary" style="margin-top: 10px;" data-toggle="tooltip" data-placement="top" title="Edit your Data">Add some Customers</a>
                        </div>
                        <div>
                        <a href="{{route('posts')}}" class="btn btn-primary" style="margin-top: 10px;" data-toggle="tooltip" data-placement="top" title="Edit your Data">Add some Posts</a>
                        </div>

            </div>
            </div>
</div>


</body>
</html>