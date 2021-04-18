<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends  CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll($table, $resultType='std'){
    	$query=$this->db->query("SELECT * FROM $table");

		if ($resultType!='std'){
			return $query->result_array();
		}

    	return $query->result();
	}

	public function getAllForStatus($table, $status){

	}

	public function getRow($table, $field){ //id ve s.

	}

	public function getRowForStatus($table, $status){

	}

	public function insert($table, array $data, $lastInsertId=false){
		$this->db->insert($table, $data);

		if ($lastInsertId===true){
			return $this->db->insert_id();
		}
	}

	public function update($table, array $data, $id){

	}

	public function delete($table, $id){

	}


}
