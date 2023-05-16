<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5 " style="margin-top: 19%">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('students.index') }}" action="#" target="_self" class="btn btn-primary w-100 py-3">Student</a>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <a href="{{ route('accounts.index') }}" action="#" target="_self" class="btn btn-secondary w-100 py-3">Account</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Wx4p4FkZ1e5bARk9H0qT8+OwkYrDfJ/Iz7VZM2wThs7VZsNRoA6b+fPeIIgK15sP" crossorigin="anonymous"></script>
</body>
</html>
