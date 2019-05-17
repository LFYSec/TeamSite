<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

    <div class="main-content">
        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">文档相关</h4>
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
                                    <h4 class="card-title">文档批改</h4>
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
                                                <td class="text-dark text-semibold">任务信息</td>
                                                <td class="text-dark text-semibold">提交时间</td>
                                                <td class="text-dark text-semibold">提交人</td>
                                                <td class="text-dark text-semibold">文档种类</td>
                                                <td class="text-dark text-semibold">状态</td>
                                                <td class="text-dark text-semibold">文档查看</td>
                                                <th class="text-dark text-semibold">操作</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($document)){ $_foreach_v_counter = 0; $_foreach_v_total = count($document);?><?php foreach( $document as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                            <tr>
                                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo htmlspecialchars($v['Infor'], ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($v['Infor'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['SubmitTime'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['Name'], ENT_QUOTES, "UTF-8"); ?></td>

                                                <?php if ($v['Kind'] == 1) : ?>
                                                    <td>技术文档</td>
                                                <?php elseif ($v['Kind'] == 2) : ?>
                                                    <td>说明文档</td>
                                                <?php elseif ($v['Kind'] == 3) : ?>
                                                    <td>工作报告</td>
                                                <?php else : ?>
                                                    <td>其他文档</td>
                                                <?php endif; ?>
                                                <td><?php echo htmlspecialchars($v['Status'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td>
                                                    <button class="btn btn-outline-info btn-rounded" onclick="window.location.href='/admin/doc/download?id=<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>&kind=<?php echo htmlspecialchars($v['Kind'], ENT_QUOTES, "UTF-8"); ?>'">下载</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-info btn-rounded" onclick="window.location.href='/admin/doc/correct?id=<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>&kind=<?php echo htmlspecialchars($v['Kind'], ENT_QUOTES, "UTF-8"); ?>'">批改</button>
                                                </td>
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