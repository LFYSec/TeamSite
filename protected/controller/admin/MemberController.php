<?php
    class MemberController extends BaseController{
        /**
		 * 	成员列表
		 * 	// TODO /admin/member/list
		 */
		function actionList(){
            $member = new Member();

            $this->memberlist = $member->findAll(null,null,"PhoneNumber,College,Major,CreditCard,Email,StudentNumber,PinCode,Name");
		}

		/**
		 * 	成员管理
		 *  // TODO /admin/member/manage
		 */
		function actionManage(){
            
		}

    }
?>