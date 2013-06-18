<?php
namespace SmsBus\Db;

use PDO;
use SmsBus\Db\AbstractTable;
use Zend\Config\Config;

class TripsTable extends AbstractTable {
	protected $table = 'trips';
	
	public function fetchAll($where = array(), $sort = '') {
		
	}
	public function fetch($id) {
		
	}
	public function update($data = array()) {
		
	}
	public function save($data = array()) {
		
	}
	public function delete($id) {
		
	}
	
	public function needsAgency() {
		return false;
	}
	
	public function setAgencyId($agency_id = 0) {
		$this->agency = intval($agency_id);
	}
}
