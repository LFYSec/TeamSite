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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">任务树</h4>
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
                                    <thead>
                                        <tr>
                                            <td class="text-dark text-semibold" style="width: 90px;">Level</td>
                                            <td class="text-dark text-semibold" style="width: 100px;">发布人</td>
                                            <td class="text-dark text-semibold" style="width: 100px;">接收人</td>
                                            <td class="text-dark text-semibold">任务信息</td>
                                            <td class="text-dark text-semibold">任务进度</td>
                                            <td class="text-dark text-semibold" style="width: 100px;">任务状态</td>
                                            <th class="text-dark text-semibold" style="width: 160px;">截止时间</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($taskTree)){ $_foreach_v_counter = 0; $_foreach_v_total = count($taskTree);?><?php foreach( $taskTree as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($v['Level'], ENT_QUOTES, "UTF-8"); ?></td>
                                            <td><?php echo htmlspecialchars($v['AdministratorName'], ENT_QUOTES, "UTF-8"); ?></td>
                                            <td><?php echo htmlspecialchars($v['Name'], ENT_QUOTES, "UTF-8"); ?></td>

                                            <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo htmlspecialchars($v['TaskInformation'], ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($v['TaskInformation'], ENT_QUOTES, "UTF-8"); ?></td>
                                            <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo htmlspecialchars($v['TaskProgress'], ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($v['TaskProgress'], ENT_QUOTES, "UTF-8"); ?></td>
                                            

                                            <?php if ($v['isEnd'] == 1) : ?>
                                                <td>已完成</td>
                                            <?php else : ?>
                                                <td>未完成</td>
                                            <?php endif; ?>

                                            <td><?php echo htmlspecialchars($v['Deadline'], ENT_QUOTES, "UTF-8"); ?></td>
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