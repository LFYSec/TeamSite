<?php
    /**
     *  文档相关逻辑
     *  // TODO /admin/doc/
     */
    class DocController extends BaseController{
        /**
         *  文档提交
         *  // TODO /admin/doc/submit
         */
        function actionSubmit(){
            $this->taskid = arg("taskid");
            if(!empty($_FILES)){
                $infor = arg("infor");
                $kind = arg("kind");
                $rawname = $_FILES['file']['name'];

                $ufile=new uploadFile();
                $result = $ufile->upload_file($_FILES['file']);
                
                if($result){
                    $status = $this->opDoc($infor, $kind, $rawname, $ufile->uploaded);

                    if($status){
                        $this->tips("上传成功!","/admin/main/taskcenter");
                    }else{
                        $this->tips("上传成功，但插入数据库失败!原因:".$ufile->errmsg,"/admin/doc/submit");
                    }
                }else{
                    $this->tips("上传失败!原因:".$ufile->errmsg,"/admin/doc/submit");
                }
            }
        }

        /**
         *  文档下载
         *  // TODO /admin/doc/download
         */
        function actionDownload(){
            $taskid = arg("id");
            $kind = arg("kind");

            $document = new Document();

            $condition = array("TaskID = :TaskID AND Kind = :Kind",
                ":TaskID"=>$taskid,
                ":Kind"=>$kind,
            );

            $doc = $document->find($condition);

            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.$doc['FileName']);
            echo file_get_contents($doc['Link']);
        }

        /**
         *  文档批改
         *  // TODO /admin/doc/correct
         */
        function actionCorrect(){

            $document = new Document();

            if(!empty($_POST)){
                $advice = arg("advice");
                $taskid = arg("taskid");
                $kind = arg("kind");
                $status = arg("status");

                $condition = array("TaskID = :TaskID AND Kind = :Kind",
                    ":TaskID"=>$taskid,
                    ":Kind"=>$kind,
                );

                $res = $document->update($condition,array("Advice"=>$advice,"Status"=>$status,"CorrectTime"=>Date("Y-m-d")));
                if($res){
                    $this->tips("批改成功!","/admin/main/doc");
                }

            }else{
                $this->taskid = arg("id");
                $this->kind = arg("kind");
    
    
                $condition = array("TaskID = :TaskID AND Kind = :Kind",
                    ":TaskID"=>$this->taskid,
                    ":Kind"=>$this->kind,
                );
    
                $this->doc = $document->find($condition);
            }

        }


        /**
         *  文档查找
         *  // TODO /admin/doc/search
         */
        function actionSearch(){
            $doc = new Document();

            if($_POST){
                $name = arg("name");
                $kind = arg("kind");
                $keyword = arg("keyword");
                $stime = arg("stime");
                $etime = arg("etime");

                $stime = explode("/",$stime);
                array_unshift($stime, array_pop($stime));
                $stime = implode("-",$stime);

                $etime = explode("/",$etime);
                array_unshift($etime, array_pop($etime));
                $etime = implode("-",$etime);

                if(!empty($name)){
                    $condition = array("Name like :Name AND SubmitTime >= :StartTime AND SubmitTime <= :EndTime AND (FileName like :Keyword OR Infor like :Keyword OR Advice like :Keyword)",
                        ":Name"=>'%'.$name.'%',
                        ":StartTime"=>empty($stime)?"1900-01-01":$stime,
                        ":EndTime"=>empty($etime)?"2100-01-01":$etime,
                        ":Keyword"=>'%'.$keyword.'%',
                    );
                }else{
                    $condition = array(" SubmitTime >= :StartTime AND SubmitTime <= :EndTime AND (FileName like :Keyword OR Infor like :Keyword OR Advice like :Keyword)",
                        ":StartTime"=>empty($stime)?"1900-01-01":$stime,
                        ":EndTime"=>empty($etime)?"2100-01-01":$etime,
                        ":Keyword"=>'%'.$keyword.'%',
                    );
                }
                
                $this->res = $doc->findAll($condition,"SubmitTime DESC");
                
                $this->display("admin/doc_result.html");
                //print_r($doc->dumpSql());
                //dump($res);
                
            }
        }

        /**
         *  @return Bool
         */
        function opDoc($infor, $kind, $rawname, $link){
            $document = new Document();

            $condition = array("TaskID = :TaskID AND Kind = :Kind",
                ":TaskID" => $this->taskid,
                ":Kind" => $kind,
            );

            $docFind = $document->find($condition);

            $result = '';
            $name = $this->getName();

            //dump($name);

            
            if(!empty($docFind['Id'])){
                $result = $document->update($condition,array("Infor"=>$infor,"Status"=>'已更新',"FileName"=>$rawname,"Link"=>$link));
            }else{
                $task = new Task();
                $condition = array("TaskID = :TaskID",
                    ":TaskID" => $this->taskid,
                );
                $task->update($condition,array("isNew"=>1));

                $newrow = array(
                    "Id"=>NULL,
                    "TaskID"=>$this->taskid,
                    "FileName"=>$rawname,
                    "Link"=>$link,
                    "AdministratorName"=>$name['AdministratorName'],
                    "Name"=>$name['Name'],
                    "Kind"=>$kind,
                    "Infor"=>$infor,
                    "Advice"=>NULL,
                    "Status"=>"未批改",
                    "CorrectTime"=>NULL,
                    "SubmitTime"=>Date("Y-m-d"),
                );
                $result = $document->create($newrow);
            }

            return $result;
        }

        /**
         * @return Array
         */
        function getName(){
            $task = new Task();
            $condition = array("TaskID = :TaskID",
                ":TaskID"=>$this->taskid,
            );
            $res = $task->find($condition);
            return $res;
        }
    }

?>