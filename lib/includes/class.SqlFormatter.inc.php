<?php

class SqlFormatter {

	private $sql;

	protected function listQuoted($values) {
		$list;
		if (is_array($values)) {
			$i = 1;
			$limit = count($values);
			foreach ($values as $value) {
				if ($i < $limit) {
					$list .= "'";
					$list .= $value;
					$list .= "', ";
				} else {
					$list .= "'";
					$list .= $value;
					$list .= "'";
				}	
				$i++;
			}
			return $list;
		} elseif (is_string($values)) {
			$list .= $values;	
			return $list;	
		} else {
			trigger_error('Impossible datatype to add to sql statement');
		}
	}
	
	protected function listUnquoted($values) {
		$list;
		if (is_array($values)) {
			$i = 1;
			$limit = count($values);
			foreach ($values as $value) {
				if ($i < $limit) {
					$list .= $value;
					$list .= ", ";
				} else {
					$list .= $value;
				}	
				$i++;
			}
			return $list;
		} elseif (is_string($values)) {
			$list .= $values;	
			return $list;	
		} else {
			trigger_error('Impossible datatype to add to sql statement');
		}
	}

	protected function insert($table, $columns, $values) {
		$statement = "INSERT INTO ";
		$statement .= $table;
		$statement .= " (";
		$statement .= $this->listUnquoted($columns);
		$statement .= ") ";
		$statement .= "VALUES";
		$statement .= " (";
		$statement .= $this->listQuoted($values);
		$statement .= ")";
		
		$this->sql = $statement;
	}
	
	function __construct($operation, $table, $columns, $values) {
		
		if ($operation == 'insert') {
			$this->insert($table, $columns, $values);
		} elseif ($operation == 'select') {
			$this->sql = "No support yet for select query, add it."
		} else {
			$this->sql = "No support for your operation type, add it to the SQLFormatter class";
		}
				
	}
	
	public function getSQL() {
		return $this->sql;
	}
	
	
}





?>