<?php
    /**
	 *  管理首页主要逻辑
	 *  /admin/write/*
	 */
    class WriteController extends MainController{
        /**
         *  请假
         *  /admin/write/leave
         */
        function actionLeave(){
            if($_POST){
                $name = arg("name");
                $duration = arg("duration");
                $reason = arg("reason");
                $kind = arg("kind");
                $date = arg("date");

                $date = explode("/",$date);
                array_unshift($date, array_pop($date));
                $date = implode("-",$date);

                $leaverecord = new LeaveRecord();

                $newrow = array(
                    "Name"=>$name,
                    "LeaveDate"=>$date,
                    "LeaveType"=>$kind,
                    "Reason"=>$reason,
                    "LeaveTime"=>$duration
                );

                $leaverecord->create($newrow);

                $this->tips("记录成功!","/admin/main/leave");
            }
        }

        /**
         *  迟到
         *  /admin/write/late
         */
        function actionLate(){
            if($_POST){
                $name = arg("name");
                $duration = arg("duration");
                $reason = arg("reason");
                $kind = arg("kind");
                $date = arg("date");

                $date = explode("/",$date);
                array_unshift($date, array_pop($date));
                $date = implode("-",$date);

                $laterecord = new LateRecord();

                $newrow = array(
                    "Name"=>$name,
                    "LateDate"=>$date,
                    "LateType"=>$kind,
                    "Reason"=>$reason,
                    "LateTime"=>$duration
                );

                $laterecord->create($newrow);

                $this->tips("记录成功!","/admin/main/late");
            }
        }

        /**
         *  记账
         *  /admin/write/money
         */
        function actionMoney(){
            if($_POST){
                $cost = arg("money");
                $kind = arg("kind");
                $reason = arg("reason");

                $money = new Money();

                $newrow = array(
                    "money"=>$cost,
                    "kind"=>$kind,
                    "reason"=>$reason,
                    "date"=>Date("Y-m-d"),
                    "name"=>$_SESSION['username'],
                );

                $money->create($newrow);

                $this->tips("记账成功!","/admin/main/money");
            }
        }
    }

?>