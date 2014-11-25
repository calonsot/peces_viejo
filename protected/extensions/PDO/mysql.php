<?php
class mysql
{
	public $db;
	private $dbname = 'usos';
	private $host = 'localhost';
	private $username = 'root';
	private $password = 'root';
	private $port = '5432';  //default
	
	public function __construct()
	{
		$dbh = new PDO("mysql:dbname=$this->dbname;host=$this->host;port=$this->port", $this->username, $this->password);
		if ($dbh)
			$this->db = $dbh;
		else return 0;
	}

	public function insert ($table, $data)
	{
		$fields = '';
		$values = '';
		$sql = 'INSERT INTO '.$table.' (';
		foreach ($data as $field => $value)
		{
			$fields.= $field.', ';
			$values.= "'$value', ";
		}
		$sql.= substr($fields, 0, -2).') VALUES ('.substr($values, 0, -2).')';
		$query = $this->db->query($sql);
	}
	
	public function update ($table, $data, $cond)
	{
		$values = '';
		$sql = 'UPDATE '.$table.' SET ';
		foreach ($data as $field => $value)
		{
			$values.= $field."='$value', ";
		}
		$sql.= substr($values, 0, -2).' WHERE '.$cond;
		$query = $this->db->query($sql);
		
		if ($query)
			return 1;
		else
			return 0;
	} 
	
	public function select ($table, $fields = '*', $cond = NULL, $order = NULL, $join = NULL) 
	{
		$sql = empty($cond) ? 'SELECT '.$fields.' FROM '.$table : 'SELECT '.$fields.' FROM '.$table.' '.$join.' WHERE '.$cond;
		if (!empty($order))
			$sql.= ' ORDER BY '.$order;	
		$query = $this->db->query($sql);
		if ($query)
			return $query->fetchAll(PDO::FETCH_OBJ);
		else return 0;
	}
	

	public function eliminar($table, $cond)
	{
		$sql = 'DELETE From '.$table;		
		$sql.= ' WHERE '.$cond;
		$query = $this->db->query($sql);
		
		if ($query)
			return 1;
		else
			return 0;
	}
	
	public function get_id($table, $campo, $cond){
		$sql = 'SELECT '.$campo.' FROM '.$table.' WHERE '.$cond;
		echo "<br>SQL: ".$sql."<br>";
		$query = $this->db->query($sql);
		
		if ($query){
			//echo "----- ENTRO AL QUERY-----<br>";
			foreach ($query->fetchAll(PDO::FETCH_OBJ) as $k => $field)
			{
				//echo "field-campo: ".$field->$campo."<br>";
				return '<p>'.$field->$campo.'</p>';
			}
		}
		else{ 
			return 0;
		}
	}
}