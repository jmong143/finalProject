<?php

class LoginController extends BaseController {
	
	var $indexView = 'login.index';
	var $adminView = 'login.admin';
	var $adminListView = 'login.admin.list';
	var $showView = 'login.show';
	var $userView = 'login.user';
	var $user;

	public function __construct(User $user, DTRecord $dtr){
		$this->mainModel = $user;
		$this->dtrModel = $dtr;
	}
	
	
	
}
