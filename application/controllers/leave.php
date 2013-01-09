<?php
class leave extends MVC_controller{
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
		$data['leave'] =$ab= $this->crud->read('SELECT lvr.id,lvr.emp_id,emp.firstname,emp.lastname,emp.mid_name,jb.job_name,emp.salary,lvr.leave_apply,lvr.reason,lvr.fr,lvr.tod,lvr.date,lvr.id, lvr.status
		FROM employees AS emp, leave_request AS lvr,jobs AS jb WHERE lvr.emp_id=emp.id AND emp.position=jb.id');
		
		//dependencies : header__.php, leave_.php {view leave reason}
		if($_POST['pst']){
			$id = explode('/',$_POST['id']);
			//print_r($id);
			$a = $this->crud->read('SELECT em.lastname,em.firstname,em.mid_name,lr.leave_apply,lr.fr,lr.tod,lr.reason,lr.id,lr.status FROM leave_request as lr,employees as em WHERE em.id=:id AND lr.id=:mid',array('id'=>$id[1],'mid'=>$id[2]));
			$data['nme'] = $a[0]['lastname'].", ".$a[0]['firstname']." ".$a[0]['mid_name'];
			$data['leave'] = $a[0]['leave_apply'];
			$data['from'] = $a[0]['fr'];
			$data['to'] = $a[0]['tod'];
			$data['reason'] = $a[0]['reason'];
			$data['lrid'] = $a[0]['id'];
			$data['st'] = $a[0]['status'];
			
			$this->load->render('admin/leave_view_spec',$data);
			return false;
		}
		//dependencies : header__.php, leave_.php {accep leave request for particular request}
		if($_POST['accpt']){
				$id =  $_POST['id'];
				$this->crud->update('leave_request',array('status'=>1),array('id'=>$id));
				echo "<div id='sc'><h1>Congratulation!</h1><h2>Leave request is successfully accept</h2>";
				echo "<a href='".base_url()."compensation/leave' class='g-button blue'>Ok</a>";
				
				
		return false;
		}
		
		$this->load->render('common/header__',$data);
		$this->load->render('admin/leave_',$data);
		$this->load->render('common/footer_',$data);
	}

	public function view($id = false){
		$data['info'] = $this->user->who('employees',$this->session->_get('uid'));
		$data['leavecnt'] = $this->cnt;
		$data['whoAreThem'] = $this->whoAreThem;
		$a = $this->crud->read('SELECT em.lastname,em.firstname,em.mid_name,lr.leave_apply,lr.fr,lr.tod,lr.reason,lr.id,lr.status FROM leave_request as lr,employees as em WHERE em.id=:id AND lr.id=:mid',array('id'=>$id[0],'mid'=>$id[1]));
			$data['nme'] = $a[0]['lastname'].", ".$a[0]['firstname']." ".$a[0]['mid_name'];
			$data['leave'] = $a[0]['leave_apply'];
			$data['from'] = $a[0]['fr'];
			$data['to'] = $a[0]['tod'];
			$data['reason'] = $a[0]['reason'];
			$data['lrid'] = $a[0]['id'];
			$data['emp_id'] = $id[0];
			$data['lrstatus'] = $a[0]['status'];

		if($_POST['accpt']){
				$id = explode('/', $_POST['id']);
			$a = $this->crud->update('leave_request',array('status'=>1),array('id'=>$id[1]));
			$data['success'] = "Leave request was successfully accepted.";
		}


		$this->load->render('common/header__',$data);
		$this->load->render('admin/leave_view_spec',$data);
		$this->load->render('common/footer_',$data);

	}
}