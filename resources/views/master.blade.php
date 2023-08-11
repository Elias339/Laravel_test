<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#ABCD</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ms-5" href="">#ABCD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('company_list')}}">Companies</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('employee_list')}}">Employees</a>
            </li>

        </ul>
    </div>
</nav>
@yield('content')


<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
