<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-warning">

    <div class="container">
        <div class="row">
            <div class="col-md ms-5 ps-5">
                <h1 class="my-5 text-center mx-5">🏋️‍♂️ GYM CODER</h1>
                <a href="{{route('index')}}" class="btn btn-danger btn-sm mb-5">← Go back </a>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Your name here"
                            name="name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Insert Email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="membershipType" placeholder="Membership Type"
                            name="membershipType" required>
                    </div>
                    <div class="mb-3">
                        <h6>Membership Expiration :</h6>
                        <input type="date" class="form-control" id="membershipExpiration"
                            placeholder="Membership Expiration" name="membershipExpiration" required>
                    </div>
                    <button type="submit" class="btn btn-danger float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
