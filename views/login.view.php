<!doctype html>
<html lang="en">
<head>
    <title>
        offer
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://bootswatch.com/5/cyborg/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="/js/script.js" rel="script"></script>
    <style>
        .form-control{
            color: #000!important;
        }
    </style>

</head>
<body>
<div class="container" style="margin-top: 100px">
        <h1>Login</h1>
    <form method="post" action="">
        <fieldset>
            <div class="form-group">
                <label for="username" class="form-label mt-4">Username</label>
                <input required type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp" placeholder="Username">
                <small id="usernameHelp" class="form-text text-muted">Enter your username without spaces</small>
            </div>
            <div class="form-group">
                <label for="password" class="form-label mt-4">Password</label>
                <input required type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Password">
                <small id="passwordHelp" class="form-text text-muted">Enter your password</small>
            </div>
            <br>

            <div class="d-flex col-12">
                <div class="d-inline-block col-6" style="padding-right: 10px">
                    <button type="submit" name="login" class="btn btn-success col-12">Login</button>
                </div>
                <div class="d-inline-block col-6" style="padding-left:10px ">
                    <button type="reset" class="btn btn-danger col-12">Reset</button>
                </div>
            </div>
        </fieldset>

    </form>
    </div>
<?php require 'partials/footer.php' ?>