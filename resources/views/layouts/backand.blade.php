<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel Curd Opration!</title>
    <style>
        .header-area nav ul{
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        .header-area nav ul li{
            display: inline-block;
            margin-right: 10px;
        }
        .header-area nav ul li:last-child{
            margin-right: 0px;
        }
        .header-area nav ul li a{
            text-decoration: none;
            display: inline-block;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-area bg-success py-2 px-3">
                    <nav>
                        <ul>
                            <li><a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Products</a></li>
                            <li><a href="{{ route('brand.index') }}" class="btn btn-sm btn-info">Brands</a></li>
                            <li><a href="{{ route('categury.index') }}" class="btn btn-sm btn-warning">Categuries</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- main section  --}}
                        @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
