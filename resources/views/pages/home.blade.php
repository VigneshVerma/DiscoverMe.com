<!DOCTYPE html>
<html lang="en" >
  
  <head>
    <meta charset="UTF-8">
    <title>
      Sign Up
    </title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet'type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0 normalize.min.css">
    <link  rel="stylesheet" href="{{asset('css/app.css')}}">
    <link  rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <title>{{config('app.name', 'DISCOVERME')}}</title>
  </head>

  <body>
    <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">
        
        <div id="login">   
          <!-- <h1>Welcome Back!</h1> -->
          <form action="/" method="post">
            <div class="field-wrap">

              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Forgot Password?</a></p>
            <center><button class="button button-block"/>Log In</button></center>
          </form>
        </div>

        <div id="signup">   
          <!-- <h1>Sign Up for Free</h1> -->
          <form action="/" method="post">
            <div class="top-row">
            </div>

            <div class="field-wrap">

              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>

            <div class="field-wrap">

              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" id="password" required autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Retype Password<span class="req">*</span>
              </label>
              <input type="password" type="password"  id="confirm_password" required autocomplete="off"/>
            </div>
            <center><button type="submit" class="button button-block"/>Get Started</button></center>
            
            </form>
          </div>
          
          
      </div><!-- tab-content -->
        
    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/homepage.js"></script>
    <script>
      var password = document.getElementById("password")
      ,confirm_password = document.getElementById("confirm_password");

      function validatePassword()
      {
        if(password.value != confirm_password.value) 
        {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } 
        else 
        {
          confirm_password.setCustomValidity('');
        }
      } 

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>
