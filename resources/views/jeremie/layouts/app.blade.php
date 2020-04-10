<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <title>API CAT 2</title>
</head>
<body>
    <div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Jeremie Sekamonyo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item @if(Request::is('feepayments'))
                        active
                        @endif">
                            <a class="nav-link" href="/feepayments">View Fees Table<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>

          <main class="py-5">
              @include('jeremie.layouts.notify')
              @yield('content')
          </main>
    </div>
</body>
</html>
