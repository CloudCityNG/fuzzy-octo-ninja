<?php

class checkLeave extends MVC_model{
	public function __construct(){
		parent::__construct();
	}

	public function countLeave(){
	$l = $this->db->prepare('SELECT count(*) as count FROM leave_request WHERE status=0');
		$l->execute();
		$a = $l->fetch(PDO::FETCH_ASSOC);
		/*
			foreach ($a as $key => $value) {
				# code...
				$val = ($value['status']==0) ? $val+1 : $val;
				$ret['count'] = $val;
				$b = $this->db->prepare('SELECT lastname,firstname FROM employees WHERE id=:id');
				$b->execute(array('id'=>$value['emp_id']));
				$c = $b->fetchAll();

			}


		*/

		return $a['count'];
		
	}

	public function whoAreThem(){
		$l = $this->db->prepare('SELECT e.firstname,e.lastname,lr.emp_id,lr.id FROM leave_request as lr,employees as e WHERE status=0 AND lr.emp_id=e.id');
		$l->execute();
		return $l->fetchAll();
	}


}