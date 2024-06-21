<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-color: #f8f9fa;
    }
    .register-container {
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
        margin-left: auto;
        margin-left: auto;
        display: block;
        width: 400px;


        /* padding-left: 150px; */
        /* margin-left: 40%;
        margin-top: 0px;
        margin-bottom: 0px; */
        /* padding-left: 50%; */
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
<body>
    <div class="container mt-5">
        <div class="register-container">

        <h1 class="text-center">Register User</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required >
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
