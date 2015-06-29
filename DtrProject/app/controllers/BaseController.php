<?php

class BaseController extends Controller {

	var $indexView = '';
	var $adminView = '';
	var $adminListView = '';
	var $showView = '';
	var $userView = '';
	
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
	public function index()
	{
		return View::make($this->indexView);
	}
	public function loginProcess(){
		
		
		$mainModel = $this->mainModel;
			$user=Auth::attempt(array(
				'username'=>Input::get('username'),
				'password'=>Input::get('password'),
		));
		
		if($user)
		{
			$role = Auth::user()->role;
			if ($role == 'admin'){
				return Redirect::route('admin');
				//->with('title', 'admin');
				//echo $user1->position
				//return 'admin';
			}
			elseif ($role == 'user'){
				return Redirect::route('user');
				//->with('title', 'user');
				//return "user";
			}
		}
		else
		{
			return 'fails';
		}
		
	}
	
	public function adminIndex(){
		$mainModel = $this->mainModel->get();
		return View::make($this->adminView);
	}
	public function adminList(){
		$mainModel = $this->mainModel->get();
		return View::make($this->adminListView)
		->with('recordList', $mainModel);
	}
	
	public function view($id){
		return View::make($this->showView)
		->with('info',User::find($id));
	}
	public function delete(){
		$id = Input::get('id');
		$mainModel = $this->mainModel->find($id);
		$mainModel->delete();
	
		return Redirect::route('admin');
	}
	public function user()
	{
		if (Auth::check())
		{
			echo "aa";
		}	
		
		exit;	
		$dtrModel = $this->dtrModel->get($userid);
		return View::make($this->userView)
		->with('userList', $dtrModel);
		

				
	}
	
	public function getLogout()
	{
		Auth::logout();
		return Redirect::route('login');
	}
	public function dtInProcess(){
		
	}
	public function dtOutProcess(){
	
	}
}
