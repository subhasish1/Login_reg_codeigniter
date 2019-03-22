<?php

class welcome_model extends CI_Model
{
	function fetch_data(){
		$query = $this->db->get("stu_info");
		return $query;
	}

	function display_records()
	{
		/*$query=$this->db->query("select * from stu_reg ");
		return $query->result();*/
	}
	function totalreg()
	{
		$query=$this->db->query("select * from stu_reg");
		return $query->result();
	}
	function age($age){
		$agee = $age;
		$sql_age = "select count(name) as age_stu ,age 
		from (
			select * , TIMESTAMPDIFF(YEAR,dob,CURDATE()) AS age from stu_reg
		) As t
		where t.age=".$agee;
		return $this->db->query($sql_age);
	}
	function saveEmpDetails($empinfo){
		return $this->db->insert('empdetails',$empinfo);
	}

	function schooldata(){
		$query = $this->db->query("SELECT schoolnm,count(schoolnm) as s from stu_info GROUP by schoolnm ORDER BY s desc");
		return $query -> result();
	}

	function classdata(){
		$query = $this->db->query("SELECT class,count(class) as s from stu_info GROUP by class ORDER BY s DESC");
		return $query -> result();
	}
	function fcmpnydata(){
		$query = $this->db->query("SELECT fcmpnynm,count(fcmpnynm) as s from stu_info GROUP by fcmpnynm ORDER BY s DESC");
		return $query -> result();
	}
	function gendata(){
		$query = $this->db->query("SELECT gender,count(gender) as s from stu_reg GROUP by gender ORDER BY s DESC");
		return $query -> result();
	}
	
	

}