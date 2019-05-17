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
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">个人信息</h4>
                                <div class="selected float-right">
                                    <select class="custom-select">
                                        <option selected="selected" value="0">Monthly</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Weekly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-overflow">
                                <table class="table table-lg" style="table-layout: fixed;">
                                    <tbody>
                                        <tr>
                                            <td>姓名</td>
                                            <td><?php echo htmlspecialchars($info['Name'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr>
                                            <td>权限</td>
                                            <td><?php echo htmlspecialchars($info['MemberType'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr>    
                                            <td>身份证号</td>
                                            <td><?php echo htmlspecialchars($info['PinCode'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr> 
                                            <td>银行卡号</td>
                                            <td><?php echo htmlspecialchars($info['CreditCard'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr> 
                                            <td>学号</td>
                                            <td><?php echo htmlspecialchars($info['StudentNumber'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr>
                                            <td>学院</td>
                                            <td><?php echo htmlspecialchars($info['College'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr> 
                                            <td>专业</td>
                                            <td><?php echo htmlspecialchars($info['Major'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr>
                                            <td>生日</td>
                                            <td><?php echo htmlspecialchars($info['Birthday'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr>
                                            <td>手机号</td>
                                            <td><?php echo htmlspecialchars($info['PhoneNumber'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                        <tr> 
                                            <td>邮箱</td>
                                            <td><?php echo htmlspecialchars($info['Email'], ENT_QUOTES, "UTF-8"); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
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