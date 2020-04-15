<!DOCTYPE html>
<link href="{{asset('css/app.css')}}" rel="stylesheet">

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project</title>    
  </head>

 
  <body >
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
           
            <a class="navbar-brand" href="#">WeZo</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">welcome page<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category">Home<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">card<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">History<span class="sr-only"></span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log out<span class="sr-only"></span></a>
                    </li>
                </ul>
                   
                </form>
            </div>
        </nav>
        @include('inc.messages')
        @yield('content')  <!-- Dynamic part-->
      </body>
      </html>

