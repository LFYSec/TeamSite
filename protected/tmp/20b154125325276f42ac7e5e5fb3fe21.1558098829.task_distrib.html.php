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
        $('#datetimepicker5').datetimepicker({
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
                    <h4 class="card-title">任务分发</h4>
                </div>
                <div class="card-body">
                    <form class="forms-sample" method="POST">
                        <div class="form-group">
                            <label>发布人</label>
                            <p><?php echo htmlspecialchars($taskDetail['AdministratorName'], ENT_QUOTES, "UTF-8"); ?></p>
                            <input type="hidden" class="form-control" name="sender" value='<?php echo htmlspecialchars($taskDetail['AdministratorName'], ENT_QUOTES, "UTF-8"); ?>'>
                            <input type="hidden" class="form-control" name="taskid" value='<?php echo htmlspecialchars($taskid, ENT_QUOTES, "UTF-8"); ?>'>
                        </div>
                        <div class="form-group">
                                <label>任务信息</label>
                                <p><?php echo htmlspecialchars($taskDetail['TaskInformation'], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        <div class="form-group">
                            <label>接受人</label>
                            <input type="text" class="form-control" name="receiver" required>
                        </div>
                        <div class="form-group">
                            <label>任务描述</label>
                            <textarea class="form-control" rows="4" name="infor" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">截止日期</label>
                            <input type="text" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" name="ddl" required/>
                        </div>

                        <button type="submit" class="btn btn-common mr-3">提交</button>
                        <!--<button class="btn btn-light">Cancel</button>-->
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