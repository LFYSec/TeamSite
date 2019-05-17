<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

    <div class="main-content">
        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">个人中心</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                    <ol class="breadcrumb float-right">
                        <li><a href="/admin/main/index">返回首页</a></li>
                    </ol>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="profile-bg">
                        <div class="user-profile">
                            <figure class="profile-wall-img">
                                <img class="img-fluid" src="../../i/img/profile/user-bg.jpg" alt="User Wall">
                            </figure>
                            <div class="profile-body">
                                <figure class="profile-user-avatar">
                                    <img src="../../i/img/profile/user1.jpg" alt="User Wall">
                                </figure>
                                <h3 class="profile-user-name"><?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES, "UTF-8"); ?></h3>
                                <small class="profile-user-address">队长/队员(todo...)</small>
                                <div class="profile-user-description">
                                    <p>个人简介? Or something interesting?</p>
                                </div>
                                <div class="m-t-5">
                                    <a href="/admin/main/info" class="btn btn-common">个人信息</a>
                                </div>
                            </div>
                            
                            <div class="row border-top m-t-20">
                                <div
                                    class="col-4 border-right d-flex flex-column justify-content-center align-items-center py-4">
                                    <h3>274</h3>
                                    <small>新任务</small>
                                </div>
                                <div
                                    class="col-4 border-right d-flex flex-column justify-content-center align-items-center py-4">
                                    <h3>2,483</h3>
                                    <small>未完成任务</small>
                                </div>
                                <div
                                    class="col-4 border-right d-flex flex-column justify-content-center align-items-center py-4">
                                    <h3>101</h3>
                                    <small>待批改文档</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="timeline-view bg-white p-20">
                        <h4 class="box-title">公告栏(todo...)</h4>
                        <div class="row">
                            <div class="col-12">
                                <form class="form" >
                                    <div class="form-group floating-label">
                                        <textarea class="form-control form-control" row="7" placeholder="发布公告"></textarea>
                                    </div>
                                </form>
                                <div class="m-b-20">
                                    <button type="submit" class="btn btn-common float-right">发布</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="activity" class="m-t-20">
                                    <ul class="timeline timeline-hairline">
                                        <li class="timeline-inverted">
                                            <div
                                                class="timeline-circle rounded-circle text-primary text-center">
                                                <i class="lni-envelope"></i></div>
                                            <div class="timeline-entry">
                                                <div class="card">
                                                    <div class="card-body timeline-entry-content">
                                                        <p class="mb-0">本周<span
                                                                class="text-primary">xxx</span>过生日！
                                                        </p>
                                                        <p class="mb-0">
                                                            <span>
                                                                2019.5.21
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="timeline-circle rounded-circle text-warning text-center">
                                                <i class="lni-alarm-clock"></i></div>
                                            <div class="timeline-entry">
                                                <div class="card">
                                                    <div class="card-body timeline-entry-content">
                                                        <p class="mb-0"> 今日打扫卫生 </p>
                                                        <p class="mb-0">
                                                            <span>
                                                                todo...
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-circle rounded-circle text-warning text-center">
                                                <i class="lni-alarm-clock"></i>
                                            </div>
                                            <div class="timeline-entry">
                                                <div class="card">
                                                    <div class="card-body timeline-entry-content">
                                                        <p class="mb-0">好好学习，天天向上！</p>
                                                        <p class="mb-0">
                                                            <span>
                                                                    😄😄😄
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="content-footer">
        <div class="footer">
            <div class="copyright" style="text-align: center;">
                <span>Copyright © 2003-2019 V5++, All Right Reserved</span>
            </div>
        </div>
    </footer>

</div>