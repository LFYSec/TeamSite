<?php if(!class_exists("View", false)) exit("no direct access allowed");?>
<div class="page-container">

    <div class="main-content">
        
        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">用款记录</h4>
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
                    <h4 class="card-title">记账本</h4>
                </div>
                <div class="card-body">
                    <form class="forms-sample" method="POST">
                        <div class="form-group">
                            <label>金额</label>
                            <input type="text" class="form-control" name="money">
                        </div>
                        <label>用途</label>
                        <div class="form-group">
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="1" checked="checked" value="购买物资">
                                <label class="custom-control-label" for="1">购买物资</label>
                            </div>
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="2" value="日常开销">
                                <label class="custom-control-label" for="2">日常开销</label>
                            </div>
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="3" value="其他">
                                <label class="custom-control-label" for="3">其他</label>
                            </div>
                            <!--
                            <div class="custom-control custom-radio radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="kind" id="4" value="in">
                                <label class="custom-control-label" for="4">存入</label>
                            </div>
                            -->
                        </div>
                        <div class="form-group">
                            <label>具体原因</label>
                            <input type="text" class="form-control" name="reason">
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