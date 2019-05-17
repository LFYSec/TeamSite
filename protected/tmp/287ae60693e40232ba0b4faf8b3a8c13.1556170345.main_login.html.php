<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>V5++</title>
    <link rel="stylesheet" type="text/css" href="/i/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/i/fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="/i/css/main.css">
    <link rel="stylesheet" type="text/css" href="/i/css/responsive.css">
</head>

<body>
    <div class="wrapper-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-header border-bottom text-center">
                            <h4 class="card-title">Sign In</h4>
                        </div>
                        <div class="card-body">
                            <form actio='#' class="form-horizontal m-t-20" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" required="" placeholder="username" name="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" required="" placeholder="password", name="password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <button class="btn btn-common btn-block" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>

    <script src="/i/js/jquery-min.js"></script>
    <script src="/i/js/popper.min.js"></script>
    <script src="/i/js/bootstrap.min.js"></script>
    <script src="/i/js/jquery.app.js"></script>
    <script src="/i/js/main.js"></script>
</body>
</html>