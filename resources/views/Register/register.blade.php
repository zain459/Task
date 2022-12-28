<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <title>Laravel</title>
</head>
<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="{{route('register'}}" method="POST">
                        @csrf
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Register</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                        @if (Session::has('error'))
                          <p class="text-danger">{{Session::get('error')}}</p>
                            
                          @endif

      
                          <div class="form-outline mb-4">
                          <input type="name" id="form2Example17" name="name" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Name</label>
                          @if ($errors->has('name'))
                          <div class="error">{{ $errors->first('name') }}</div>
                            
                          @endif
                        </div>
                        
                          <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Email address</label>
                          @if ($errors->has('email'))
                          <div class="error">{{ $errors->first('email') }}</div>
                            
                          @endif
                        </div>

                        <div class="form-outline mb-4">
                          <input type="phone" id="form2Example27" name="phone" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Phone</label>
                          @if ($errors->has('phone'))
                          <div class="error">{{ $errors->first('phone') }}</div>
                            
                          @endif
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                          @if ($errors->has('password'))
                          <div class="error">{{ $errors->first('password') }}</div>
                            
                          @endif
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="button">Register</button>
                        </div>
      
                    
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>