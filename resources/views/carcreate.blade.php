<!DOCTYPE html>
<html>
@if(Auth::check())
    
  <head>
      
    <meta charset="utf-8">
    <title>Add your Slambook Details here</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Add SlamBook Details</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('add')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Carcompany">Hobby</label>
            <input type="text" class="form-control" name="carcompany">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Model">Favorite Actress</label>
            <input type="text" class="form-control" name="model">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Lucky Number</label>
            <input type="text" class="form-control" name="price">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Fblink">Facebook Link</label>
            <input type="text" class="form-control" name="fblink">
          </div>
        </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Instalink">Instagram Link</label>
            <input type="text" class="form-control" name="instalink">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Photolink">Photo Link</label>
            <input type="text" class="form-control" name="photolink">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="SnapchatId">Snapchat Id</label>
            <input type="text" class="form-control" name="snapchatid">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Sportsperson">Sports Person</label>
            <input type="text" class="form-control" name="sportsperson">
          </div>
        </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Book">Favorite Book</label>
            <input type="text" class="form-control" name="favoritebook">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Bike">Favorite Bike</label>
            <input type="text" class="form-control" name="favoritebike">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Car">Favorite Car</label>
            <input type="text" class="form-control" name="favoritecar">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Brand">Favorite Brand</label>
            <input type="text" class="form-control" name="favoritebrand">
          </div>
        </div>
        
        
        
        
        
        
        
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </div>
      </form>
   </div>
  </body>
@endif
@if(Auth::guest())
    <a href="/login" class="btn btn-info"> You need to Login >></a>
@endif
</html>