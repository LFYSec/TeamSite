<?php if(!class_exists("View", false)) exit("no direct access allowed");?><script>
    function search(){
        var form = document.getElementById('forms');
        form.submit();
    }
</script>
<div class="page-container">

        <div class="main-content">
            <div class="container-fluid">
    
                <div class="breadcrumb-wrapper row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <h4 class="page-title">日常记录</h4>
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
                            <div class="card-header border-bottom">
                                <div class="float-left">
                                    <h4 class="card-title">请假记录</h4>
                                </div>
                                <div class="float-left" style="padding-left: 15px;padding-top: 2px;">
                                    <h5 style="margin:0px"><a href="/admin/write/leave">[记一个]</a></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div></div>
                                </div>
                                <div class="col-sm-12 col-md-5" style="float:right">
                                    <div id="datatable_filter" class="dataTables_filter">
                                        <form action="/admin/main/money" method="post" id="forms">
                                            <input type="search" class="form-control form-control-sm" name="name" style="float:right;width:40%;margin-top:20px" >
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-1" style="float:left;padding:0px; padding-top:23px;">
                                    <button type="button" class="btn btn-common" onclick=search();>搜索</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>请假人</th>
                                                <th>请假类型</th>
                                                <th>请假原因</th>
                                                <th>请假时间</th>
                                                <th>请假时长</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($leaveDetail)){ $_foreach_v_counter = 0; $_foreach_v_total = count($leaveDetail);?><?php foreach( $leaveDetail as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($v['Name'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['LeaveType'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['Reason'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['LeaveDate'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['LeaveTime'], ENT_QUOTES, "UTF-8"); ?></td>
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
        </div>
    
        <footer class="content-footer">
            <div class="footer">
                <div class="copyright" style="text-align: center;">
                    <span>Copyright © 2003-2019 V5++, All Right Reserved</span>
                </div>
            </div>
        </footer>

    </div>