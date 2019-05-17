<?php if(!class_exists("View", false)) exit("no direct access allowed");?><link href="../../i/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="../../i/css/base.css" type="text/css" rel="stylesheet">
<link href="../../i/css/tempusdominus-bootstrap-4.css" type="text/css" rel="stylesheet">

<script src="../../i/js/jquery-min.js"></script>
<script src="../../i/js/moment-with-locales.min.js"></script>
<script src="../../i/js/moment-timezone-with-data-2012-2022.min.js"></script>
<script src="../../i/js/base.js"></script>
<script src="../../i/js/tempusdominus-bootstrap-4.js"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'L'
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
            format: 'L'
        });
    });
</script>


<div class="page-container">

    <div class="main-content">

        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">任务中心</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                    <ol class="breadcrumb float-right">
                        <li><a href="/admin/main/index">返回首页</a></li>
                    </ol>
                </div>
            </div>

        </div>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">文档查找</h4>
                </div>
                <div class="card-body">
                    <!--
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <h5 style="padding-bottom:15px">模糊搜索</h5>
                            <div class="form-group">
                                <label>姓名</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label>关键字</label>
                                <input type="text" class="form-control" name="keyword">
                            </div>
                        </form>
                        -->
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>提交人</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <label style="padding-right:10px">文档类型</label>
                        <div class="form-group m-b-20">
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="1" checked="checked">
                                <label class="custom-control-label" for="1">技术文档</label>
                            </div>
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="2">
                                <label class="custom-control-label" for="2">说明文档</label>
                            </div>
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="3">
                                <label class="custom-control-label" for="3">工作报告</label>
                            </div>
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="4">
                                <label class="custom-control-label" for="4">其他文件</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>关键字</label>
                            <input type="text" class="form-control" name="keyword">
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">开始日期</label>
                            <input type="text" class="form-control datetimepicker-input" id="datetimepicker1" data-toggle="datetimepicker" data-target="#datetimepicker1" name="stime"/>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">截止日期</label>
                            <input type="text" class="form-control datetimepicker-input" id="datetimepicker2" data-toggle="datetimepicker" data-target="#datetimepicker2" name="etime"/>
                        </div>
                        
                        <button type="submit" class="btn btn-common mr-3">提交</button>
                    </form>
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