<?php
class employees extends MVC_controller{
	private $s = false;
	public $whoAreThem;
	public $current = 1;
	public $basic = false;
	public function __construct(){
		parent::__construct();
		if(islogin()==true){if(isadmin()!=true){redirect('users');}}else{redirect('main');}
		$this->cnt = $this->checkLeave->countLeave();
		$this->whoAreThem = $this->checkLeave->whoAreThem();

	}
	
	public function index(){

		$data['info'] = $this->user->who('employees',$this->session->_get('uid'));
		$data['emp'] = $s = $this->crud->read('SELECT e.id,e.firstname,e.contact,e.lastname,e.mid_name,d.dep_name,j.job_name,e.hiredate FROM employees as e, jobs as j, departments as d WHERE j.id=e.position AND j.dep_id=d.id ORDER BY e.id DESC',array('id'=>$this->session->_get('uid')));
		$data['leavecnt'] = $this->cnt;
		$data['whoAreThem'] = $this->whoAreThem;
		//important
		if($_POST['gen']){
		
		$username =  r_string($_POST['uname'])."_";
		return false;
		}
		
		//search
		if(isset($_POST['searchEmp'])){
			$search = r_string($_POST['query']);
			$data['search']=$s = $this->crud->read('SELECT e.id,e.firstname,e.lastname,e.mid_name,d.dep_name,j.job_name,e.hiredate,e.contact FROM employees as e, jobs as j, departments as d WHERE j.id=e.position AND j.dep_id=d.id AND e.id != :id AND (firstname LIKE :search)',array('id'=>$this->session->_get('uid'),'search'=>"$search%"));
			$this->s = true;
		}
		
		$this->load->render('common/header__',$data);
		if($this->s == true){
		$this->load->render('admin/employees_search_',$data);
		}else{
		$this->load->render('admin/employees_',$data);
		}
		$this->load->render('common/footer_',$data);
	}
	
	public function add($id = false){
		$data['info'] = $this->user->who('employees',$this->session->_get('uid'));
		$data['leavecnt'] = $this->cnt;
		$data['whoAreThem'] = $this->whoAreThem;
		//select department
		$data['gdep'] = $dept = $this->crud->read('select * from departments');
		
		if($_POST['addemp']){
		//information
		$register = array(
			//'department' => r_string($_POST['dept']),
			'position' =>  r_string($_POST['jobp']),
			'salary' =>  r_string($_POST['sal']),
			'lastname' =>  r_string($_POST['lname']),
			'firstname' =>  r_string($_POST['fname']),
			'mid_name' =>  r_string($_POST['mname']),
			'bday' =>  r_string($_POST['bday']),
			'age' =>  r_string($_POST['age']),
			'sex' =>  r_string($_POST['gender']),
			'civil_status' =>  r_string($_POST['cv_stat']),
			'address' => r_string($_POST['address']),
			'religion' =>  r_string($_POST['religion']),
			'contact' =>  r_string($_POST['cnumber']),
			'sss' =>  r_string($_POST['sss']),
			'philhealth' =>  r_string($_POST['philhealth']),
			'pagibig' =>  r_string($_POST['pagibig']),
			'tin' =>  r_string($_POST['tin']),
			'def_pass' =>  r_string($_POST['regpassword']),
			'hiredate'=>date('Y-m-d'));
		//user account
	
			$username =  r_string($_POST['regusername']);
			$password =  r_string($_POST['regpassword']);
			echo $register['bday'];
		//execute
		$this->crud->create('employees',$register);
		$lastid = $this->db->lastInsertId();
		$account = array('uid'=>$lastid,'username'=>r_string($username),'password'=>sha1(r_string($password)),'usertype'=>1);
			$this->crud->create('users',$account);
				$data['success'] = "Employee was successfully added.";
		
		}
		if($_POST['dep']){
			$id=$_POST['id'];
			$q = $this->crud->read('SELECT id,job_name,b_salary FROM jobs WHERE dep_id=:id',array('id'=>$id));
			echo "<option value=''>Select Position</option>";
			foreach($q as $key){
				echo "<option value=".$key['id']."><a href='#' class='slectjob' onClick=\"slectjob('".$key['id']."','".$key['b_salary']."','".$key['job_name']."')\" id='dp_".$key['id']."' title='".$key['job_name']."'>".$key['job_name']."</a></option>";
				
				}
			return false;
		}

		if($_POST['pos']){
			$id = $_POST['id'];
		$q = $this->crud->read('SELECT b_salary FROM jobs WHERE id=:id',array('id'=>$id));
		echo $q[0]['b_salary'];
		return false;
		
		}

		$data['formenu'] =  (!isset($id[0])) ? $this->session->_get('salary') : $id[0];
		
		$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_add_',$data);
		$this->load->render('common/footer_',$data);
	}

	public function basic_information(){
		if(isset($_POST['select-department'])){

				$id =  $_POST['department'];
				$position = $_POST['position'];
				$salary = $_POST['sal'];
				$this->session->_set(array('dep_id'=>$id,'pos_id'=>$position,'salary'=>$salary));
		}

		$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_basic_',$data);
		$this->load->render('common/footer_',$data);
	}

	public function benefits_accounts(){
		if(isset($_POST['basic-information'])){
			$this->session->_set(array('lastname' =>  r_string($_POST['lname']),
			'firstname' =>  r_string($_POST['fname']),
			'mid_name' =>  r_string($_POST['mname']),
			'bday' =>  r_string($_POST['bday']),
			'age' =>  r_string($_POST['age']),
			'sex' =>  r_string($_POST['gender']),
			'civil_status' =>  r_string($_POST['cv_stat']),
			'address' => r_string($_POST['address']),
			'religion' =>  r_string($_POST['religion']),
			'contact' =>  r_string($_POST['cnumber'])));
			//$this->session->_set(array('religion'=>r_string($_POST['religion'])));
		}
		$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_benefits_',$data);
		$this->load->render('common/footer_',$data);
	}

	public function user_account(){
		if(isset($_POST['benefits'])){
			$this->session->_set(array('sss' =>  r_string($_POST['sss']),
			'philhealth' =>  r_string($_POST['philhealth']),
			'pagibig' =>  r_string($_POST['pagibig']),
			'tin' =>  r_string($_POST['tin'])));
			}

		$data['forusername'] = getRandomString();
		$data['forpassword'] = date(Ymdhis);
	
	$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_user_',$data);
		$this->load->render('common/footer_',$data);
	}

	public function complete(){
	//print_r($_SESSION);
			if(isset($_POST['useraccounts'])){
					foreach ($_SESSION as $key => $value) {
						# code...
						$data[$key] = $value;
					}
			$a = $this->crud->read("SELECT dep_name FROM departments WHERE id=:id",array(':id'=>$this->session->_get('dep_id')));
			$b = $this->crud->read("SELECT job_name FROM jobs WHERE id=:id",array(':id'=>$this->session->_get('pos_id')));
			$data['department'] = $a[0]['dep_name'];
			$data['position'] = $b[0]['job_name'];
			$data['username']=  r_string($_POST['regusername']);
			$data['password'] =  r_string($_POST['regpassword']);
			$data['success'] = "Employee was successfully added.";
			//print_r($a);
			}
		$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_completed_',$data);
		$this->load->render('common/footer_',$data);
	}




	public function search(){
$data['info'] = $this->user->who('employees',$this->session->_get('uid'));
		$data['leavecnt'] = $this->cnt;
		$data['whoAreThem'] = $this->whoAreThem;
		$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_search_',$data);
		$this->load->render('common/footer_',$data);
	}
	
	public function view($id = false){
			$id = $id[0];
			$data['info'] = $this->user->who('employees',$this->session->_get('uid'));

		$data['gdep'] = $dept = $this->crud->read('select * from departments');
		$q = $this->db->prepare('SELECT e.position,e.id,e.firstname,e.lastname,e.mid_name,d.dep_name,j.job_name,j.b_salary,e.sex,e.bday,e.age,e.civil_status,e.address,e.religion,
			e.contact,e.sss,e.philhealth,e.pagibig,e.tin FROM employees as e, jobs as j, departments as d WHERE j.id=e.position AND j.dep_id=d.id AND e.id=:emp_id');	
		$q->execute(array('emp_id'=>$id));
		$a = $this->db->prepare('SELECT username, password from users WHERE uid=:id');
		$a->execute(array('id'=>$id));
		$data['account'] = $z =  $a->fetch(PDO::FETCH_ASSOC);
		$data['e_info'] =$d = $info = $q->fetch(PDO::FETCH_ASSOC);
		if($_POST['modify']){
			$update = array('position' =>  r_string($_POST['jobp']),
			'salary' =>  r_string($_POST['sal']),
			'lastname' =>  r_string($_POST['lname']),
			'firstname' =>  r_string($_POST['fname']),
			'mid_name' =>  r_string($_POST['mname']),
			'bday' =>  r_string($_POST['bday']),
			'age' =>  r_string($_POST['age']),
			'sex' =>  r_string($_POST['gender']),
			'civil_status' =>  r_string($_POST['cv_stat']),
			'address' => r_string($_POST['address']),
			'religion' =>  r_string($_POST['religion']),
			'contact' =>  r_string($_POST['cnumber']),
			'id'=>$id);
			$y = $this->db->prepare('UPDATE employees SET position=:position,
														salary=:salary,
														lastname=:lastname,
														firstname=:firstname,
														mid_name=:mid_name,
														bday=:bday,
														age=:age,
														sex=:sex,
														civil_status=:civil_status,
														address=:address,
														religion=:religion,
														contact=:contact WHERE id=:id');
			 $y->execute($update);
			 
			 $data['success'] = "Employee was successfully modify.";
		}


		$this->load->render('common/header__',$data);
		
		$this->load->render('admin/employees_view_',$data);
		
		$this->load->render('common/footer_',$data);

		
		
	}

	public function delete($id = false){
	$data['leavecnt'] = $this->cnt;
	$data['whoAreThem'] = $this->whoAreThem;
	if(!empty($id[0])){
	$this->crud->delete('employees',array('id'=>$id[0]));
	$this->crud->delete('users',array('uid'=>$id[0]));
		$data['success'] = "Employee was succefully remove";
	$data['info'] = $this->user->who('employees',$this->session->_get('uid'));
	$data['emp'] = $s = $this->crud->read('SELECT e.id,e.firstname,e.lastname,e.mid_name,d.dep_name,j.job_name FROM employees as e, jobs as j, departments as d WHERE j.id=e.position AND j.dep_id=d.id AND e.id != :id ORDER BY e.id DESC',array('id'=>$this->session->_get('uid')));

		
	}else{
		redirect('employees');
	}
	$this->load->render('common/header__',$data);
		$this->load->render('admin/employees_',$data);
		$this->load->render('common/footer_',$data);
	}

	public function save(){

		if(isset($_POST['name'])){
    		$name = $_POST['name'];
			$pk = $_POST['pk'];
    		$value = $_POST['value'];
    		$this->crud->update('employees',array($name=>$value),array('id'=>$pk));
    	}else{
    		redirect('employees');
    	}

    }
}

/*

}elseif ($this->current==2) {
		$this->load->render('admin/employees_basic_',$data);
			# code...
		}elseif ($this->current==3) {
			# code...
		$this->load->render('admin/employees_benefits_',$data);
		}elseif ($this->current==4) {
		$this->load->render('admin/employees_user_',$data);
		}
*/