<!DOCTYPE html>
<html>

<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/article/css/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">




</head>

<body>

    <div class="container">

        <div class="row justify-content-center">
            <header class="d-flex justify-content-center">
                <h1>My blog</h1>
            </header>
        </div>

        <div class="row justify-content-center">
            <nav class="d-flex justify-content-center">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="/article/">Home</a></li>

                    <?php if (Auth::isLoggedIn()): ?>

                        <li class="nav-item"><a class="nav-link" href="/article/admin/">Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="/article/logout.php">Log out</a></li>

                    <?php else: ?>

                        <li class="nav-item"><a class="nav-link" href="/article/login.php">Log in</a></li>

                    <?php endif; ?>

                    <li class="nav-item"><a class="nav-link" href="/article/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-xl-8 col-lg-8">
                <main>