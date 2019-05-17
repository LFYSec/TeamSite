<?php 
	/**
	 *  后台用户首页逻辑
	 *
	 * /admin/index/index
	 */
	class IndexController extends BaseController{
		function actionIndex(){
			$this->checkLogin();
			$this->name = $_SESSION['username'];
			//公告
			$addan = new Addan();
			$res = $addan->find(null,"AddanID DESC","AddInfor");
			$this->addinfo = $res['AddInfor'];  // find()返回findall[0],一维数组
			//请假
			$leava = new LeaveRecord();
			$condition = array("LeaveDate = :LeaveDate",
				"LeaveDate"=>$this->get_date(),
			);
			$res = $leava->findAll($condition,null,"Name,LeaveType,LeaveTime");
			$this->leave = $res;
			//任务
			$task = new Task();
			$condition = array("Name = :Name AND Deadline >= :Deadline",
				":Name"=>$this->name,
				":Deadline"=>$this->get_date(),
			);
			$res = $task->findAll($condition,null,"AdministratorName,ReleaseTime,Deadline,TaskInformation");
			$this->task = $res;

			//工作内容

		}

		public function get_date(){
			return date("Y-m-d");

		}
	}
 ?>