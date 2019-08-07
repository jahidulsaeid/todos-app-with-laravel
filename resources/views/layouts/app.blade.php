<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">LOGO</a>
            <ul class="navbar-nav white-text">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/todos">Todos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/new-todos">Create Todo</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
           <a href=""><i class="fa fa-times float-right mt-1" aria-hidden="true"></i></a> 
        </div>
        @endif
        @yield('content')
    </div>

</body>