<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">

        <div class="card shadow-lg" style="width: 40rem;">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h1 class="h4 text-gray-900">Admin Login !</h1>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="customCheck">
                        <label class="form-check-label" for="customCheck">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
</body>
</html>
