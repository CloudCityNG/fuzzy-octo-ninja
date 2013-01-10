<?php

class admin extends MVC_controller{
	public $cnt = 0;
	public $whoAreThem;
	public function __construct(){
		parent::__construct();
			if(islogin()==true){if(isadmin()!=true){redirect('users');}}else{redirect('main');}
			$this->cnt = $this->checkLeave->countLeave();
		$this->whoAreThem = $this->checkLeave->whoAreThem();
	
	}
	public function index(){
		$data['info'] = $this->user->who('employees',$this->session->_get('uid'));
		$data['leavecnt'] = $this->cnt;
		$data['whoAreThem'] = $this->whoAreThem;
		$this->load->render('common/header__',$data);
		$this->load->render('admin/admin_',$data);
		$this->load->render('common/footer_',$data);
	}
	
	private function info(){
	if($this->session->_get('islogin')==true){
				if($this->session->_get('utype')!=0){
					redirect('main');
				}
			}
	

	}
	
	
}
