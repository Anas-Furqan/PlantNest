

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<section class="vh-100">
    <div class="container py-5 h-100">
    <h1 class="text-center mt-5">Login Form</h1>
      <div class="row d-flex align-items-center justify-content-center h-100">

      @if(session('loginmessage'))
<center>
<div class="alert alert-danger w-50" role="alert">
{{session('loginmessage')}}
</div>

</center>
     
      @endif
        
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form method="POST" action="{{URL::TO('/loginAdmin')}}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email address</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form1Example23" name="pass" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>
  
            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
            </div>
  
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </section>

