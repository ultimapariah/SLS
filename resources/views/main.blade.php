<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Library System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAUhc0AAe+7AC+ys8AqxtkACklJwDl9fwAfSBOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAREQAAAAAAEUE2EAAAABFEQWYxAAAXQiQRFmYQAUIkEURBNjEBJBFEQkQWYQERREJEJEExAUQiRCRCRBUFRCIkREREVQBUQiJERFUAAAVEIkRVAAAAAFREVQAAAAAABVUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+HwAA+A8AAOAHAACAAwAAAAEAAAABAAAAAQAAAAEAAAABAACABwAAwB8AAOB/AADx/wAA//8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
</head>

<body>
    <nav style="background-color:maroon; background-image: url("D:\Projects\SLS\resources\css\bg.jpg")" class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a style="color: white" class="navbar-brand mr-auto" href="#">Simple Library System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    
                <ul class="navbar-nav">
                    @guest

                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ route('registration') }}">Register</a>
                    </li>

                    @else

                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>

                    @endguest
                </ul>
                
            </div>
        </div>
    </nav>
    <div class="container mt-5">

        @yield('content')
        
    </div>
    
</body>

</html>
