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
                            <div class="float-left">
                                <h4 class="card-title">我的任务</h4>
                            </div>
                            <div class="float-left" style="padding-left: 15px;padding-top: 2px;">
                                <h5 style="margin:0px"><a href="/admin/task/release">[发布任务]</a></h5>
                            </div>
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
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <td class="text-dark text-semibold"><strong>ID</strong></td>
                                        <td class="text-dark text-semibold"><strong>发布人</strong></td>
                                        <td class="text-dark text-semibold"><strong>开始日期</strong></td>
                                        <td class="text-dark text-semibold"><strong>截止日期</strong></td>
                                        <td class="text-dark text-semibold"><strong>任务信息</strong></td>
                                        <td class="text-dark text-semibold"><strong>任务树</strong></td>
                                        <th class="text-dark text-semibold"><strong>具体操作</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($taskDoing)){ $_foreach_v_counter = 0; $_foreach_v_total = count($taskDoing);?><?php foreach( $taskDoing as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['AdministratorName'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['ReleaseTime'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['Deadline'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <?php $length = mb_strlen($v['TaskInformation'],"UTF-8"); ?>
                                        <?php if ($length<=10) : ?>
                                            <td><?php echo htmlspecialchars($v['TaskInformation'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <?php else : ?>
                                            <td title="<?php echo htmlspecialchars($v['TaskInformation'], ENT_QUOTES, "UTF-8"); ?>"><?php echo mb_substr($v['TaskInformation'],0,11,"UTF-8");?>...</td>
                                        <?php endif; ?>
                                        <td onclick="window.location.href='/admin/task/tree?sid=<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>'"><button class="btn btn-link" style="color:#17a2b8">查看</button></td>
                                        <td>
                                            
                                            <script>
                                                function formSubmit(elementValue,url) {

                                                    var turnForm = document.createElement("form");   
                                                    document.body.appendChild(turnForm);
                                                    turnForm.method = 'post';
                                                    turnForm.action = url;
                                                    
                                                    var newElement = document.createElement("input");
                                                    newElement.setAttribute("name","taskid");
                                                    newElement.setAttribute("type","hidden");
                                                    newElement.setAttribute("value",elementValue);
                                                    turnForm.appendChild(newElement);

                                                    turnForm.submit();
                                                }
                                            </script>
                                        <?php if ($v['isEnd'] == 0) : ?>
                                            <button class="btn btn-outline-info btn-rounded" onclick=formSubmit("<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>","/admin/task/schedule");>进度提交</button>
                                            <button class="btn btn-outline-info btn-rounded" onclick=formSubmit("<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>","/admin/doc/submit");>文档提交</button>
                                            <button class="btn btn-outline-info btn-rounded" onclick=formSubmit("<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>","/admin/task/distrib");>任务分发</button>
                                        <?php else : ?>
                                            已完成
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">我发布的任务</h4>
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
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <td class="text-dark text-semibold"><strong>父任务</strong></td>
                                        <td class="text-dark text-semibold"><strong>接收者</strong></td>
                                        <td class="text-dark text-semibold"><strong>发布日期</strong></td>
                                        <td class="text-dark text-semibold"><strong>截止日期</strong></td>
                                        <td class="text-dark text-semibold"><strong>任务信息</strong></td>
                                        <td class="text-dark text-semibold"><strong>当前进度</strong></td>
                                        <th class="text-dark text-semibold"><strong>是否完成</strong></td>
                                        <th class="text-dark text-semibold"><strong>操作</strong></td>
                                        <th class="text-dark text-semibold"><strong>文档数</strong></td>
                                        <th class="text-dark text-semibold"><strong>文档状态</strong></td>
                                        <th class="text-dark text-semibold"><strong>查看</strong></td>
                                    </tr>
                                </thead>
                                <script>
                                        function countTheDoc(){
                                            var num;

                                            $.get("/api/countdoc",function(data){
                                                var tmp = JSON.parse(data);

                                                for(var k in tmp){
                                                    try{
                                                        var node = "countdoc"+k;
                                                        console.log(node);
                                                        document.getElementById(node).innerHTML=tmp[k];
                                                    }catch(err){
                                                        console.log(k);
                                                    }
                                                    
                                                }
                                            });
                                        }

                                        function comleteTask(tid){
                                            var r=confirm("确定将任务设置为完成？");
                                            if (r==true){
                                                $.post("/admin/task/done",{id:tid});
                                                window.location.reload();
                                            }
                                        }
                                        /*
                                        function docTree(tid){
                                            var turnForm = document.createElement("form");   
                                            document.body.appendChild(turnForm);
                                            turnForm.method = 'post';
                                            turnForm.action = "/admin/task/tree";
                                            
                                            var newElement = document.createElement("input");
                                            newElement.setAttribute("name","sid");
                                            newElement.setAttribute("type","hidden");
                                            newElement.setAttribute("value",tid);
                                            turnForm.appendChild(newElement);

                                            turnForm.submit();
                                        }
                                        */

                                        function taskDel(tid){
                                            var httpRequest = new XMLHttpRequest();
                                            var r=confirm("撤销后任务将被删除，确认撤销？");
                                            if (r==true){
                                                $.post("/admin/task/cancel",{id:tid});
                                                window.location.reload();
                                            }
                                        }
                                </script>
                                <tbody>
                                    <?php if(!empty($myTask)){ $_foreach_v_counter = 0; $_foreach_v_total = count($myTask);?><?php foreach( $myTask as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                    <tr>
                                        <?php if ($v['TaskID'] !== $v['SuperiorID']) : ?>
                                            <td><?php echo htmlspecialchars($v['SuperiorID'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <?php else : ?>
                                            <td>无</td>
                                        <?php endif; ?>
                                        <td><?php echo htmlspecialchars($v['Name'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo substr($v['ReleaseTime'],2,10);?></td>
                                        <td><?php echo substr($v['Deadline'],2,10);?></td>

                                        <?php $length = mb_strlen($v['TaskInformation'],"UTF-8"); ?>
                                        <?php if ($length<=6) : ?>
                                            <td><?php echo htmlspecialchars($v['TaskInformation'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <?php else : ?>
                                            <td title="<?php echo htmlspecialchars($v['TaskInformation'], ENT_QUOTES, "UTF-8"); ?>"><?php echo mb_substr($v['TaskInformation'],0,8,"UTF-8");?>...</td>
                                        <?php endif; ?>

                                        <?php $length = mb_strlen($v['TaskProgress'],"UTF-8"); ?>
                                        <?php if ($length<=7) : ?>
                                            <td><?php echo htmlspecialchars($v['TaskProgress'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <?php else : ?>
                                            <td title="<?php echo htmlspecialchars($v['TaskProgress'], ENT_QUOTES, "UTF-8"); ?>"><?php echo mb_substr($v['TaskProgress'],0,9,"UTF-8");?>...</td>
                                        <?php endif; ?>
                                        
                                        <?php if ($v['isEnd'] == 0) : ?>
                                            <td onclick=comleteTask(<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>);><button class="btn btn-link" style="color:#17a2b8">未完成</button></td>
                                        <?php else : ?>
                                            <td style="padding-left:27px">已完成</td>
                                        <?php endif; ?>

                                        <td onclick=taskDel(<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>);><button class="btn btn-link" style="color:#17a2b8">撤销</button></td>

                                        <td style="text-align:center" id="countdoc<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>">0</td>

                                        <?php if ($v['isNew'] == 1) : ?>
                                            <td>有更新</td>
                                        <?php else : ?>
                                            <td>已查看</td>
                                        <?php endif; ?>

                                        <td>
                                            <button class="btn btn-outline-info btn-rounded" onclick="window.location.href='/admin/main/doc?id=<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>'">文档</button>
                                            <button class="btn btn-outline-info btn-rounded" onclick="window.location.href='/admin/task/tree?sid=<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>'">任务树</button>
                                        </td>
                                    </tr>

                                    <?php endforeach; }?>
                                    <script>
                                        countTheDoc();
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">我的文档</h4>
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
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <td class="text-dark text-semibold"><strong>文档信息</strong></td>
                                        <td class="text-dark text-semibold"><strong>提交时间</strong></td>
                                        <td class="text-dark text-semibold"><strong>批改意见</strong></td>
                                        <td class="text-dark text-semibold"><strong>批改人</strong></td>
                                        <td class="text-dark text-semibold"><strong>状态</strong></td>
                                        <td class="text-dark text-semibold"><strong>操作</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($document)){ $_foreach_v_counter = 0; $_foreach_v_total = count($document);?><?php foreach( $document as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($v['Infor'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['SubmitTime'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['Advice'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['AdministratorName'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td><?php echo htmlspecialchars($v['Status'], ENT_QUOTES, "UTF-8"); ?></td>
                                        <td>
                                            <button class="btn btn-outline-info btn-rounded" onclick=formSubmit("<?php echo htmlspecialchars($v['TaskID'], ENT_QUOTES, "UTF-8"); ?>","/admin/doc/submit");>更新</button>
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