<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/4/css/bootstrap.min.css" />
    <script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer=""></script>
</head>

<body is="dmx-app" id="selectpatient">
    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mr-auto" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1_collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home</a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="#">Contact</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1>Select Patient</h1>
        <div class="container-fluid wappler-block pt-3 pb-3">
            <div class="row">
                <div class="col">
                    <form id="formPatientSelect" method="post" class="formPatientSelect">
                        <div class="form-row">
                            <div class="col-12 col-lg">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="firstname" name="firstname" placeholder="Enter some text">
                                </div>
                            </div>
                            <div class="col-12 col-lg">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" placeholder="Enter some text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-lg">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter some text">
                                </div>
                            </div>
                            <div class="col-12 col-lg">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control form-control-lg" id="company" name="company" placeholder="Enter some text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 col-lg">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Enter some text">
                                </div>
                            </div>
                            <div class="col-12 col-lg">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Enter some text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p id="spfootercopyrightnotice">Copyright (c) 2021 by Lukner Medical Clinic, PLLC</p>
    </footer>
    <script src="bootstrap/4/js/popper.min.js"></script>
    <script src="bootstrap/4/js/bootstrap.min.js"></script>
</body>

</html>