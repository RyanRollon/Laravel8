<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Posty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    
    @yield('design')

    </head>
    
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="margin-bottom:15px">

            <div class="container-fluid">
              <!-- Links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/" style="padding-left:15px">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=" {{  route('dashboard') }}" style="padding-left:15px">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=" {{  route('posts.index') }}" style="padding-left:15px">Posts</a>
                </li>
              </ul>

              <ul class="navbar-nav navbar-right">  
                <!-- Authentication -->
                @if (auth()->user())                  
                    <li class="nav-item">
                       <a class="nav-link" href="#" style="padding-right:15px">{{ auth()->user()->name }}</a>
                   </li>
                   <li class="nav-item">
                     <form action =" {{  route('logout') }} " method="post">
                      @csrf
                      <button type="submit" class="btn btn-primary btn-block">Logout</button>
                    </form>
                    </li>
                @else
                    <li class="nav-item">
                       <a class="nav-link" href=" {{  route('login') }}" style="padding-right:15px" >Login</a>
                    </li>
                     <li class="nav-item">
                          <a class="nav-link" href=" {{  route('register') }}" style="padding-right:15px">Register</a>
                      </li>
                @endif
                
              </ul>
            </div>   
            
          </nav>
        
        @yield('content')
    



    </body>
</html>
