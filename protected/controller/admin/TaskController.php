<?php
    /**
     *  Routers for Task
     *  /admin/task/
     */
    class TaskController extends BaseController{
        
        /**
         *  进度提交
         *  // TODO /admin/task/schedule
         */
        function actionSchedule(){
            $task = new Task();
            if(empty($_POST['progress'])){
                $this->taskid = arg("taskid");

                $condition = array("TaskID = :TaskID",
                    ":TaskID" => $this->taskid,
                );

                $this->taskDetail = $task->find($condition);
                
            }else{
                $taskid = arg("taskid");
                $progress = arg("progress");

                $condition = array("TaskID = :TaskID",
                    ":TaskID" => $taskid,
                );

                $status = $task->update($condition,array("TaskProgress"=>$progress));
                if($status){
                    $this->tips("提交成功!","/admin/main/taskcenter");
                }
            }
        }

        /**
         *  任务分发
         *  // TODO /admin/task/distrib
         */

        function actionDistrib(){
            $task = new Task();

            $this->taskid = arg("taskid");

            $condition = array("TaskID = :TaskID",
                ":TaskID" => $this->taskid,
            );

            $this->taskDetail = $task->find($condition);

            if(!empty($_POST['receiver'])){

                $receiver = arg("receiver");
                $infor = arg("infor");
                $ddl = arg("ddl");
                $sender = arg("sender");

                $recevs = explode("，",$receiver);
                
                $ddl = explode("/",$ddl);
                array_unshift($ddl, array_pop($ddl));
                $ddl = implode("-",$ddl);

                $result = 0;

                foreach($recevs as $v){
                    $newrow = array(
                        "SuperiorID"=>$this->taskid,
                        "Name"=>$v,
                        "AdministratorName"=>$sender,
                        "ReleaseTime"=>Date("Y-m-d"),
                        "Deadline"=>$ddl,
                        "TaskInformation"=>$infor,
                        "Level"=>intval($this->taskDetail['Level'])+1,
                        "isEnd"=>0,
                    );

                    $task->create($newrow);
                    $result++;
                }

                if($result == count($recevs)){
                    $this->tips("发布成功!","/admin/main/taskcenter");
                }
            }

        }

        /**
         *  任务发布
         *  // TODO /admin/task/release
         */
        function actionRelease(){
            $this->sender = $_SESSION['username'];

            if(!empty($_POST['receiver'])){
                $task = new Task();

                $receiver = arg("receiver");
                $infor = arg("infor");
                $ddl = arg("ddl");
                $sender = arg("sender");

                $recevs = explode("，",$receiver);

                $ddl = explode("/",$ddl);
                array_unshift($ddl, array_pop($ddl));
                $ddl = implode("-",$ddl);

                $result = 0;

                foreach($recevs as $v){
                    $newrow = array(
                        "Name"=>$v,
                        "AdministratorName"=>$sender,
                        "ReleaseTime"=>Date("Y-m-d"),
                        "Deadline"=>$ddl,
                        "TaskInformation"=>$infor,
                        "Level"=>1,
                        "isEnd"=>0,
                        "isNew"=>1,
                    );

                    $maxid = $task->create($newrow);

                    $condition = array("TaskID = :TaskID",
                        ":TaskID"=>$maxid,
                    );

                    $task->update($condition,array("SuperiorID"=>$maxid));

                    $result++;
                    
                }
                if($result == count($recevs)){
                    $this->tips("发布成功!","/admin/main/taskcenter");
                }
            }
        }
        
        /**
         *  任务树
         *  // TODO /admin/task/tree
         */

        function actionTree(){
            $taskid = arg("sid");

            $task = new Task();

            $condition = array("SuperiorID=:SID AND SuperiorID!='0' OR TaskID=:TID",
                ":SID"=>$taskid,
                ":TID"=>$taskid
            );
            $this->taskTree = $task->findAll($condition,"Level ASC");
        }

        /**
         *  改变任务状态(完成任务)
         *  // TODO /admin/task/done
         */
        function actionDone(){
            $taskid = arg("id");

            $task = new Task();

            $condition = array("TaskID=:TaskID AND AdministratorName=:AdministratorName",
                ":TaskID"=>$taskid,
                ":AdministratorName"=>$_SESSION['username']
            );
            $task->update($condition,array("isEnd"=>1));
        }

        /**
         *  撤销任务
         *  // TODO /admin/task/cancel
         */
        function actionCancel(){
            $taskid = arg("id");

            $task = new Task();

            $condition = array("TaskID=:TaskID AND AdministratorName=:AdministratorName",
                ":TaskID"=>$taskid,
                ":AdministratorName"=>$_SESSION['username']
            );
            $task->delete($condition);
        }
        

    }

?>