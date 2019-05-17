<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

    <div class="main-content">
        
        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">信息修改</h4>
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
                    <h4 class="card-title">基本信息</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-xs-12">
                            <form role="form" id="form-validation" novalidate="novalidate" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">手机号</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="PhoneNumber"
                                            required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">身份证号</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="PinCode"
                                            required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">银行卡号</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="CreditCard"
                                            required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">专业</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Major"
                                            required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">邮箱</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Email"
                                            required="" aria-required="true">
                                    </div>
                                </div>
                                <button class="btn btn-common">Submit</button>
                            </form>
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