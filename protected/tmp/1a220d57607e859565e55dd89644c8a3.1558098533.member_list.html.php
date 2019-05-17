<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

        <div class="main-content">
            <div class="container-fluid">
    
                <div class="breadcrumb-wrapper row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <h4 class="page-title">团队成员</h4>
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
                                        <h4 class="card-title">成员列表</h4>
                                    </div>
                                    <div class="table-overflow">
                                        <table class="table table-lg" style="table-layout: fixed;">
                                            <thead>
                                                <tr>
                                                    <td class="text-dark text-semibold">姓名</td>
                                                    <td class="text-dark text-semibold">学院</td>
                                                    <td class="text-dark text-semibold">专业</td>
                                                    <td class="text-dark text-semibold">学号</td>
                                                    <td class="text-dark text-semibold">身份证号</td>
                                                    <td class="text-dark text-semibold">银行卡号</td>
                                                    <th class="text-dark text-semibold">Email</td>
                                                    <th class="text-dark text-semibold">手机号</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($memberlist)){ $_foreach_v_counter = 0; $_foreach_v_total = count($memberlist);?><?php foreach( $memberlist as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                                <tr>
                                                    <!--<td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title=""></td>
                                                    -->
                                                    <td><?php echo htmlspecialchars($v['Name'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['College'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['Major'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['StudentNumber'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['PinCode'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['CreditCard'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['Email'], ENT_QUOTES, "UTF-8"); ?></td>
                                                    <td><?php echo htmlspecialchars($v['PhoneNumber'], ENT_QUOTES, "UTF-8"); ?></td>
                                                </tr>
                                                <?php endforeach; }?>
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