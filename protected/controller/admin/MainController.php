<?php
	/**
	 *  管理首页主要逻辑
	 *  /admin/main/*
	 */
	class MainController extends BaseController{
		/**
		 * 	个人信息
		 *  // TODO /admin/main/index
		 */
		function actionIndex(){
			$this->checkLogin();

			$member = new Member();

			$res = $member->find(["Name = :Name",":Name"=>$_SESSION['username']]);
			$this->info = $res;
		}	

		/**
		 *  任务中心
		 *  // TODO /admin/main/taskcenter
		 */
		function actionTaskcenter(){
			$this->checkLogin();
			//我的任务
			$task = new Task();
			$condition = array("Name = :Name",
				":Name"=>$_SESSION['username'],
			);
			$this->taskDoing = $task->findAll($condition,"isEnd ASC,Deadline ASC");
			$this->length = 0;

			//我发布的任务
			$condition = array("AdministratorName = :AdministratorName",
				":AdministratorName"=>$_SESSION['username'],
			);
			$this->myTask = $task->findAll($condition,"isEnd ASC,isNew DESC,Deadline ASC");

			//我的文档
			$document = new Document();
			$condition = array("Name = :Name",
				":Name"=>$_SESSION['username'],
			);
			$this->document = $document->findAll($condition);
		}

		/**
		 *  文档批改	
		 *  // TODO /admin/main/doc
		 */
		function actionDoc(){
			$this->checkLogin();
			$document = new Document();

			if(empty(arg("id"))){
				
				$condition = array("AdministratorName = :AdministratorName AND Status!='通过'",
					":AdministratorName"=>$_SESSION['username'],
				);
				
				$res = $document->findAll($condition,"Id desc");
				$this->document = $res;
			}else{
				$tid = arg("id");

				$condition = array("TaskID = :TaskID",
					":TaskID"=>$tid,
				);

				$task = new Task();
				$task->update($condition,array("isNew"=>0));

				$condition = array("Status!='通过' AND TaskID = :TaskID",
					":TaskID"=>$tid
				);
				
				$res = $document->findAll($condition,"Id desc");
				$this->document = $res;
			}
			
		}

		/**
		 * 	用款记录
		 * 	// TODO /admin/main/money
		 * 	// TODO add divide page 
		 */
		function actionMoney(){
			$this->checkLogin();

			$this->outSum = 0; 
			$this->outDetail = '';

			$money = new Money();
			$res = $money->findAll();

			foreach($res as $key=>$value){
				$this->outSum += $value['money'];
			}

			$this->outDetail = $res;
			
		}
		/**
		 * 	请假记录
		 * 	// TODO /admin/main/leave
		 * 	// TODO add divide page
		 */
		function actionLeave(){
			$this->checkLogin();

			$leaverecord = new LeaveRecord();
			
			$res = $leaverecord->findAll(null,"LeaveDate DESC");

			if(!empty($_POST)){
				$condition = array('Name = :Name',
					':Name'=>arg("name"),
				);

				$this->leaveDetail = $leaverecord->findAll($condition,"LeaveDate DESC");
			}else{
				$this->leaveDetail = $res;
			}
			
		}

		/**
		 * 	迟到记录
		 * 	// TODO /admin/main/late
		 * 	// TODO add divide page
		 */
		function actionLate(){
			$this->checkLogin();

			$laterecord = new LateRecord();
			
			$res = $laterecord->findAll(null,"LateDate DESC");

			if(!empty($_POST)){
				$condition = array('Name = :Name',
					':Name'=>arg("name"),
				);
				
				$this->lateDetail = $laterecord->findAll($condition,"LateDate DESC");
			}else{
				$this->lateDetail = $res;
			}

		}

		/**
		 * 	信息修改
		 * 	// TODO /admin/main/changeinfo
		 */
		function actionChangeinfo(){
			$this->checkLogin();

			$member = new Member();
			if(!empty($_POST)){
				$args = arg();
				$newCont = array();
				//dump($args);
				
				foreach($args as $key=>$value){
					if(!empty($value)){
						if($key !== 'm'&&$key !== 'c'&&$key !== 'a'&&$key !== 'PHPSESSID'){
							$newCont[$key] = $value;
						}
					}
				}
				dump($newCont);
				$condition = array("Name = :Name",
					":Name"=>$_SESSION['username'],
				);
	
				$res = $member->update($condition,$newCont);
				if($res){
					$this->tips("修改成功!","/admin/main/index");
				}
				
			}
		}

		/**
		 * 	密码修改
		 * 	// TODO /admin/main/changepwd
		 */
		function actionChangePwd(){
			$this->checkLogin();

			$member = new Member();
			if(arg("new")){
				$newPwd = arg("new");
			
				$condition = array("Name = :Name",
					":Name"=>$_SESSION['username'],
				);
				
				$res = $member->update($condition,array('Password'=>$newPwd));
				if($res){
					$this->tips("修改成功!","/admin/main/index");
				}
			}
		}
		/**
		 * 	个人信息
		 * 	// TODO /admin/main/info
		 */
		function actionInfo(){
			$member = new Member();

			$condition = array("Name = :Name",
				":Name"=>$_SESSION['username'],
			);
			$this->info = $member->find($condition);
		}

		
		function get_data(){
			return Date("Y-m-d");
		}


	}
