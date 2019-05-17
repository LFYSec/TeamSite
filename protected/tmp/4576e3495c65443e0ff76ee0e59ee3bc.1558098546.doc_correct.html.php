<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

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
                    <h4 class="card-title">文档批改</h4>
                </div>
                <div class="card-body">
                    <form class="forms-sample" method="POST">
                        <input type="hidden" class="form-control" name="taskid" value='<?php echo htmlspecialchars($taskid, ENT_QUOTES, "UTF-8"); ?>'>
                        <input type="hidden" class="form-control" name="kind" value='<?php echo htmlspecialchars($kind, ENT_QUOTES, "UTF-8"); ?>'>
                        <div class="form-group">
                            <label>文档信息</label>
                            <p><?php echo htmlspecialchars($doc['Infor'], ENT_QUOTES, "UTF-8"); ?></p>
                        </div>
                        <div class="form-group">
                            <label>提交人</label>
                            <p><?php echo htmlspecialchars($doc['Name'], ENT_QUOTES, "UTF-8"); ?></p>
                        </div>
                        <div class="form-group">
                            <label>批改意见</label>
                            <textarea class="form-control" rows="4" name="advice" required></textarea>
                        </div>
                        
                        <label>文档是否合格</label>
                        <div class="form-group m-b-20">
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="status" id="yes" value="通过" checked="checked">
                                <label class="custom-control-label" for="yes">合格</label>
                            </div>
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="status" id="no" value="不通过">
                                <label class="custom-control-label" for="no">不合格</label>
                            </div>
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