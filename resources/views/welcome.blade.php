

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
  body {
            background-image: url('{{ asset('storage/images/background2.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
.row{
    display: grid;
    justify-items: center;
    justify-content: center;
    grid-template-columns: 200px 200px 200px;
    gap: 10px;
}
.col-md-3{
    border: 2px solid black;
    /* height: 40px; */
    border-radius: 10px;
    /* padding-left: 60px; */
    /* padding-right: 60px; */
    /* padding: 15px; */
    /* padding-top: 3px; */
    padding: 60px;
    margin: 20px;

}
.btn-block,.text-center{
    font-size: 20px;
    font-weight: bold;
    color: #fff;


}
.text-center{
    font-size: 30px;
    background-color: #000

}
.col-md-3:hover{
    background-color: #0051ff;
}

</style>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Select Your Role</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-3">
                <a href="{{ route('login', ['role' => 'admin']) }}" class="btn btn-primary btn-block">Admin</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('login', ['role' => 'teacher']) }}" class="btn btn-secondary btn-block">Teacher</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('login', ['role' => 'student']) }}" class="btn btn-success btn-block">Student</a>
            </div>
        </div>
    </div>
</body>
</html>
