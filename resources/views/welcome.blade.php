{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body class="text-center">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 text-white">
        <div class="container">
            <div class="fw-bold text-uppercase mr-3">
                <img src="/img/logo.png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Beta
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <a type="button" class="btn btn-primary" href="/login">Login</a>
                </ul>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="/js/dashboard.js"></script>

</body>

</html> --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Beta App</title>

    <!-- Favicon -->
    <link href="http://www.yourwebsite.com/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/470e77dc8d.js" crossorigin="anonymous"></script>
    <link href="css/nucleo.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="css/argon.min.css" rel="stylesheet">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/white.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../../pages/dashboards/dashboard.html">
                                <img src="../../assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="../../pages/dashboards/dashboard.html" class="nav-link">
                            <span class="nav-link-inner--text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../pages/examples/pricing.html" class="nav-link">
                            <span class="nav-link-inner--text">Pricing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../pages/examples/login.html" class="nav-link">
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../pages/examples/register.html" class="nav-link">
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../pages/examples/lock.html" class="nav-link">
                            <span class="nav-link-inner--text">Lock</span>
                        </a>
                    </li>
                </ul> --}}
                <hr class="d-lg-none" />
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank"
                            data-toggle="tooltip" data-original-title="Like us on Facebook">
                            <i class="fab fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial"
                            target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                            <i class="fab fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank"
                            data-toggle="tooltip" data-original-title="Follow us on Twitter">
                            <i class="fab fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank"
                            data-toggle="tooltip" data-original-title="Star us on Github">
                            <i class="fab fa-github"></i>
                            <span class="nav-link-inner--text d-lg-none">Github</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a type="button" href="/login"
                            class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                                <i class="fas fa-solid fa-right-to-bracket mr-2"></i>
                            </span>
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome to Beta App</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="pricing card-group flex-column flex-md-row mb-3">
                        <div class="card card-pricing border-0 text-center mb-4">
                            <div class="card-header bg-transparent">
                                <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Bravo pack</h4>
                            </div>
                            <div class="card-body px-lg-7">
                                <div class="display-2">$49</div>
                                <span class="text-muted">per application</span>
                                <ul class="list-unstyled my-4">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div
                                                    class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                    <i class="fas fa-terminal"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2">Complete documentation</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div
                                                    class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                    <i class="fas fa-pen-fancy"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2">Working materials in Sketch</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div
                                                    class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                    <i class="fas fa-hdd"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2">2GB cloud storage</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-primary mb-3">Start free trial</button>
                            </div>
                            <div class="card-footer">
                                <a href="#!" class="text-light">Request a demo</a>
                            </div>
                        </div>
                        <div
                            class="card card-pricing bg-gradient-success zoom-in shadow-lg rounded border-0 text-center mb-4">
                            <div class="card-header bg-transparent">
                                <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Alpha pack</h4>
                            </div>
                            <div class="card-body px-lg-7">
                                <div class="display-1 text-white">$199</div>
                                <span class="text-white">per application</span>
                                <ul class="list-unstyled my-4">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div
                                                    class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                    <i class="fas fa-terminal"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2 text-white">Complete documentation</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div
                                                    class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                    <i class="fas fa-pen-fancy"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2 text-white">Working materials in Sketch</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div
                                                    class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                    <i class="fas fa-hdd"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2 text-white">2GB cloud storage</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-secondary mb-3">Start free trial</button>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="#!" class="text-white">Contact sales</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-lg-center px-3 mt-5">
                <div>
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-white"><strong>The Arctic Ocean</strong> freezes every winter and much of the
                        sea-ice then thaws every summer, and that process will continue whatever.</p>
                </div>
            </div>
            {{-- <div class="row row-grid justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-dark mt-5">
                            <thead>
                                <tr>
                                    <th class="px-0 bg-transparent" scope="col">
                                        <span class="text-light font-weight-700">Features</span>
                                    </th>
                                    <th class="text-center bg-transparent" scope="col">Bravo Pack</th>
                                    <th class="text-center bg-transparent" scope="col">Alpha Pack</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-0">IMAP/POP Support</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">Email Forwarding</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">Active Sync</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">Multiple domain hosting</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-sm text-light">Limited to 1 domain only</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">Additional storage upgrade</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">30MB Attachment Limit</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td class="px-0">Password protected / Expiry links</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td class="px-0">Unlimited Custom Apps</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js.cookie.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.1.0"></script>

</body>

</html>
