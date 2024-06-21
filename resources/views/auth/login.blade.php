<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .form-group label {
            font-weight: 500;
        }
        .form-group input {
            margin: 5px;
        }
        .btn-block {
            font-size: 1rem;
            padding: 0.75rem;
            color: #ffffff;
            background-color: rgb(101, 1, 1);
            border: #f8f9fa;
            border-radius: 10px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h1 class="text-center login-title">Login as {{ ucfirst($role) }}</h1>
            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <input type="hidden" name="role" value="{{ $role }}">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" style="margin-right: 31px;">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
