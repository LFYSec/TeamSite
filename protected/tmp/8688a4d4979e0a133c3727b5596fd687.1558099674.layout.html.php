<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>V5++</title>

    <link rel="stylesheet" type="text/css" href="../../i/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../i/fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="../../i/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../i/css/responsive.css">

    <script src="../../i/js/jquery-min.js"></script>

</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">

                <div class="header navbar">
                        <div class="header-container">
                            <div class="nav-logo">
                                <a href="index.html">
                                    <b><img src="../../i/img/logo.png" alt=""></b>
                                    <span class="logo">
                                        <img src="../../i/img/logo-text.png" alt="">
                                    </span>
                                </a>
                            </div>
                            <ul class="nav-left">
                                <li>
                                    <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                        <i class="lni-menu"></i>
                                    </a>
                                    <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                        <i class="lni-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="search-box">
                                    <input class="form-control" type="text" placeholder="Type to search...">
                                    <i class="lni-search"></i>
                                </li>
                                <li class="massages dropdown dropdown-animated scale-left">
                                    <span class="counter">3</span>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="lni-envelope"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg">
                                        <li>
                                            <div class="dropdown-item align-self-center">
                                                <h5><span class="badge badge-primary float-right">745</span>Messages</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="list-media">
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <img src="../../i/img/users/avatar-1.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                Amanda Robertson
                                                            </span>
                                                            <span class="sub-title">Dummy text of the printing and typesetting
                                                                industry.</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <img src="../../i/img/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                Danny Donovan
                                                            </span>
                                                            <span class="sub-title">It is a long established fact that a reader
                                                                will</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <img src="../../i/img/users/avatar-3.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                Frank Handrics
                                                            </span>
                                                            <span class="sub-title">You have 87 unread messages</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="check-all text-center">
                                            <span>
                                                <a href="#" class="text-gray">View All</a>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="notifications dropdown dropdown-animated scale-left">
                                    <span class="counter">2</span>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="lni-alarm"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg">
                                        <li>
                                            <h5 class="n-title text-center">
                                                <i class="lni-alarm"></i>
                                                <span>Notifications</span>
                                            </h5>
                                        </li>
                                        <li>
                                            <ul class="list-media">
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <div class="icon-avatar bg-primary">
                                                                <i class="lni-envelope"></i>
                                                            </div>
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                5 new messages
                                                            </span>
                                                            <span class="sub-title">4 min ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <div class="icon-avatar bg-success">
                                                                <i class="lni-comments-alt"></i>
                                                            </div>
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                4 new comments
                                                            </span>
                                                            <span class="sub-title">12 min ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <div class="icon-avatar bg-info">
                                                                <i class="lni-users"></i>
                                                            </div>
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                3 Friend Requests
                                                            </span>
                                                            <span class="sub-title">a day ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-item">
                                                    <a href="#" class="media-hover">
                                                        <div class="media-img">
                                                            <div class="icon-avatar bg-purple">
                                                                <i class="lni-comments-alt"></i>
                                                            </div>
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">
                                                                2 new messages
                                                            </span>
                                                            <span class="sub-title">12 min ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="check-all text-center">
                                            <span>
                                                <a href="#" class="text-gray">Check all notifications</a>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="user-profile dropdown dropdown-animated scale-left">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img class="profile-img img-fluid" src="../../i/img/avatar/avatar.jpg" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-md">
                                        <li>
                                            <ul class="list-media">
                                                <li class="list-item avatar-info">
                                                    <div class="media-img">
                                                        <img src="../../i/img/avatar/avatar.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title text-semibold">Tomas Murray</span>
                                                        <span class="sub-title">UI/UX Desinger</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="lni-cog"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lni-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lni-envelope"></i>
                                                <span>Inbox</span>
                                                <span class="badge badge-pill badge-primary pull-right">2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lni-lock"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
        
                <div class="side-nav expand-lg">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu">
                            <li class="side-nav-header">
                                <span>Navigation</span>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/admin/main/index" class="dropdown-toggle">
                                    <span class="icon-holder">
                                        <i class="lni-dashboard"></i>
                                    </span>
                                    <span class="title">个人中心</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
                                        <i class="lni-cloud"></i>
                                    </span>
                                    <span class="title">任务中心</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu sub-down">
                                    <li>
                                        <a href="/admin/main/taskcenter">任务中心</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
                                        <i class="lni-layers"></i>
                                    </span>
                                    <span class="title">文档相关</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu sub-down">
                                    <li>
                                        <a href="/admin/main/doc">文档批改</a>
                                    </li>
                                    <li>
                                        <a href="/admin/doc/search">文档查找</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
                                        <i class="lni-timer"></i>
                                    </span>
                                    <span class="title">日常记录</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu sub-down">
                                    <li>
                                        <a href="/admin/main/money">用款记录</a>
                                    </li>
                                    <li>
                                        <a href="/admin/main/leave">请假记录</a>
                                    </li>
                                    <li>
                                        <a href="/admin/main/late">迟到记录</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
                                        <i class="lni-package"></i>
                                    </span>
                                    <span class="title">信息修改</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu sub-down">
                                    <li>
                                        <a href="/admin/main/changeinfo">基本信息</a>
                                    </li>
                                    <li>
                                        <a href="/admin/main/changepwd">密码修改</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
                                        <i class="lni-control-panel"></i>
                                    </span>
                                    <span class="title">团队成员</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu sub-down">
                                    <li>
                                        <a href="/admin/member/manage">成员管理</a>
                                    </li>
                                    <li>
                                        <a href="/admin/member/list">成员列表</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
                                        <i class="lni-pie-chart"></i>
                                    </span>
                                    <span class="title">报名表</span>
                                    <span class="arrow">
                                        <i class="lni-chevron-right"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php include $_view_obj->compile($__template_file); ?>

        </div>
    </div>
    
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
</body>

    <script src="../../i/js/popper.min.js"></script>
    <script src="../../i/js/bootstrap.min.js"></script>
    <script src="../../i/js/jquery.app.js"></script>
    <script src="../../i/js/main.js"></script>
</html>