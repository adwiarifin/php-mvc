<?php

class Install extends Model {

	public function getTableList() {
		$sql = "show tables";
		return $this->db->query($sql);
	}

}