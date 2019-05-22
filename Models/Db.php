<?php 
/**
* 
*/
class Db
{
	public static $connection = NULL;
	public function __construct()
	{
		if(!self::$connection)
		{
			self::$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			self::$connection->set_charset('utf8');
		}
		return self::$connection;
	}

	public function getAll($sql)
	{
		$data = self::$connection->query($sql);
		$item = array();
		while($item = $data->fetch_assoc())
		{
			$items[] = $item;
		}
		return $items;
	}
	public function __destruct()
	{
		self::$connection->close();
	}
}
 ?>