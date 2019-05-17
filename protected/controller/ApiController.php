<?php
class ApiController extends BaseController {

	function actionCountdoc(){
        $document = new Document();

        $sql = "select TaskID,count(*) as num from document group by TaskID";

        $res = $document->query($sql);

        $key = array_column($res,"TaskID");
        $value = array_column($res,"num");

        $res = array_combine($key,$value);

        echo json_encode($res);

    }

    function actionTasklist(){
        $task = new Task();
        $TaskList = array();

		$condition = array("AdministratorName = :AdministratorName",
            ":AdministratorName"=>$_SESSION['username'],
        );
        $myTask = $task->findAll($condition,"isEnd ASC,isNew DESC,Deadline ASC");
        
        foreach($myTask as $v){
            array_push($TaskList,$v['TaskID']);
        }

        echo json_encode($TaskList);
    }
}
?>