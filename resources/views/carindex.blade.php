<!DOCTYPE html>
@if(Auth::check())
    <html>
      <head>
        <meta charset="utf-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      </head>
      <body>
        <div class="container">
        <br />
        @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
        @endif
        <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            @if($cars[sizeof($cars)-1]->carcompany!=NULL)
                <th>Hobby</th>
            @endif
            
            @if($cars[sizeof($cars)-1]->model!=NULL)
                <th>Actress</th>
            @endif
            
            @if($cars[sizeof($cars)-1]->price!=NULL)
                <th>Number</th>
            @endif
            


            @if($cars[sizeof($cars)-1]->instalink!=NULL)
            <th>Instagram Link</th>
            @endif

            @if($cars[sizeof($cars)-1]->fblink!=NULL)
            <th>Facebook Link</th>
            @endif

            @if($cars[sizeof($cars)-1]->fblink!=NULL)
            <th>Photo Link</th>
            @endif

            @if($cars[sizeof($cars)-1]->snapchatid!=NULL)
            <th>snapchat Id</th>
            @endif

            @if($cars[sizeof($cars)-1]->sportsperson!=NULL)
            <th>Sports Person</th>
            @endif

            @if($cars[sizeof($cars)-1]->favoritebook!=NULL)
            <th>Favorite Book</th>
            @endif

            @if($cars[sizeof($cars)-1]->favoritebike!=NULL)
            <th>Favorite Bike</th>
            @endif

            @if($cars[sizeof($cars)-1]->favoritecar!=NULL)
            <th>Favorite Car</th>
            @endif

            @if($cars[sizeof($cars)-1]->favoritebrand!=NULL)
            <th>Favorite Brand</th>
            @endif

            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
              
            <tr>
            
          <td>({{$cars[sizeof($cars)-1]->id}}</td>
                
          @if($cars[sizeof($cars)-1]->carcompany!=NULL)    
                    <td>
                    {{$cars[sizeof($cars)-1]->carcompany}}
                    </td>        
            @endif
            

            @if($cars[sizeof($cars)-1]->model!=NULL)
                <td>{{$cars[sizeof($cars)-1]->model}}</td>
            @endif
                
            @if($cars[sizeof($cars)-1]->price!=NULL)
                <td>{{$cars[sizeof($cars)-1]->price}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->instalink!=NULL)
                <td>{{$cars[sizeof($cars)-1]->instalink}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->fblink!=NULL)
                <td>{{$cars[sizeof($cars)-1]->fblink}}</td>
            @endif
            
            @if($cars[sizeof($cars)-1]->photolink!=NULL)
                <td>{{$cars[sizeof($cars)-1]->photolink}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->snapchatid!=NULL)
                <td>{{$cars[sizeof($cars)-1]->snapchatid}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->sportsperson!=NULL)
                <td>{{$cars[sizeof($cars)-1]->sportsperson}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->favoritebook!=NULL)
                <td>{{$cars[sizeof($cars)-1]->favoritebook}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->favoritebike!=NULL)
                <td>{{$cars[sizeof($cars)-1]->favoritebike}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->favoritecar!=NULL)
                <td>{{$cars[sizeof($cars)-1]->favoritecar}}</td>
            @endif

            @if($cars[sizeof($cars)-1]->favoritebrand!=NULL)
                <td>{{$cars[sizeof($cars)-1]->favoritebrand}}</td>
            @endif

            <td><a href="{{action('CarController@edit', $cars[sizeof($cars)-1]->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
              <form action="{{action('CarController@destroy', $cars[sizeof($cars)-1]->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
      </body>
@endif
@if(Auth::guest())
    <a href="/login" class="btn btn-info"> You need to Login >></a>
@endif
</html>