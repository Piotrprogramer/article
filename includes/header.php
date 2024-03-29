<!DOCTYPE html>
<html>

<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="container">

        <div class="row justify-content-center">
            <header class="d-flex justify-content-center">
                <h1>My blog</h1>
            </header>
        </div>

        <div class="row justify-content-center" >
            <div class="col-10 col-xl-8 col-lg-8">
                <nav class="navbar navbar-expand-sm navbar-light " >
                    <div class="container-fluid" >
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                                <?php if (Auth::isLoggedIn()): ?>

                                    <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>

                                <?php else: ?>

                                    <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>

                                <?php endif; ?>

                                <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 col-xl-8 col-lg-8">
                <main>