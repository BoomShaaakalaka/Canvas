<?php
require_once('connect.php'); 
header("Content-type: text/html; charset=utf-8");

//增加数据
function insert($table = "", $params = array()){
	if (!empty($params)) {
		$sql="insert into ".$table." values(";
		foreach ($params as $key => $values) {
			$sql = $sql."`".$key."`, ";
		} 
		$sql = substr(trim($sql), 0, -1);
		$sql=$sql.')';
		$result = mysql_query($sql); //echo $sql;
		return mysql_insert_id();
	}
}

//执行操作
function sql_exec($sql="")
{
	mysql_query($sql);
}

function get_md5($sql="")
{
	$rt=mysql_query($sql);
	$result = mysql_fetch_row($rt);
	return $result;
}

//查询的数据
 function sql_query($sql = "")
 {
	$result = mysql_query($sql); 	
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }
 
//查询的数据
 function select($table = "", $where = array())
 {
	$sql = "select * from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql .= "".$key." = '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	}
	$result = mysql_query($sql); 
	$return = array();
	$i = 0; 
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }


// function select_limit_books($start){
// 	$return = array();
// 	$i = $start;
// 	$j = 0;
// 	while(count($return)<16){
// 		$sql = "select * from books limit ".$i.",1";
// 		$i=$i+1;
// 		$result = mysql_query($sql);
// 		$row = mysql_fetch_array($result, MYSQL_ASSOC);
// 	}

function select_limit_books($start){
 	$sql = "select * from books limit ".$start.",16";
 	$result = mysql_query($sql);
 	$return = array();
	$i = 0; 
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;
 }
 
function selector($table = "", $where = array())
 {
	$sql = "select * from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql .= "".$key." = '".$values."' or ";
		} 
		$sql = substr(trim($sql), 0, -3);
	}
	$result = mysql_query($sql); 
	$return = array();
	$i = 0; 
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }
function selectdao($table = "", $where = array(), $order = "")
 {
	$sql = "select * from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			if ($key == "from") $key = "`from`";
			$sql .= "".$key."= '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
	if (!empty($order))  $sql .= " order by ".$order." desc";
	$result = mysql_query($sql);
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }
 
 
 //查询的数据
 function selectordao($table = "", $where = array(), $order = "")
 {
	$sql = "select * from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			if ($key == "from") $key = "`from`";
			$sql .= "".$key."= '".$values."' or ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
	if (!empty($order))  $sql .= " order by ".$order." desc";
	$result = mysql_query($sql);
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }

 // function select_limit($table = "",$left,$right){
 // 	$sql = "select * from ".$table;
 // 	$sql .=" limit ";
 // 	$sql .= $left.",";
 // 	$sql .= $right;
 // 	$result = mysql_query($sql);
 // 	$return = array();
	// $i = 0; 
	// while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
	// 	if (!empty($object)) {
	// 		foreach ($object as $key => $values) {
	// 			$return[$i][$key] = $values;
	// 		}
	// 	}
	// 	$i++;
	// }
 //    return $return;
 // }
 
 //查询的数据
 function select_like($table = "", $where = array())
 {
	$sql = "select * from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql .= "".$key." like '%".$values."%' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
	 //$sql .= " order by `order` asc ";
     //echo $sql;
	$result = mysql_query($sql); 	
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }
 
 //查询的数据
 function select_limit($table = "", $where = array(), $limit = "", $order = "")
 {
	$sql = "select * from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			if ($key == "from") $key = "`from`";
			$sql .= "".$key."= '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
	if (!empty($order))  $sql .= " order by ".$order."";
	if (!empty($limit))  $sql .= " limit ".$limit; // 
	$result = mysql_query($sql);
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }
 
 //查询的数据
 function select_connect($table = "", $connect_table = "", $on = "", $where = array(), $limit = "",$order="")
 {
	$sql = "select * from ".$table." left join ".$connect_table." on ".$on."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql .= "".$key." = '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
    if (!empty($order))  $sql .= " order by ".$order."";
	if (!empty($limit))  $sql .= " limit ".$limit; 
	$result = mysql_query($sql); 	
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }

//查询的数据
function select_part_connect($table = "", $connect_table = "", $on = "", $param="")
{
   $sql = "select * from ".$table." left join ".$connect_table." on ".$on."";
   $sql = "select ".$param." from ".$table." left join ".$connect_table." on ".$on;
   
   $result = mysql_query($sql); 	
   $return = array();
   $i = 0;
   while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
	   if (!empty($object)) {
		   foreach ($object as $key => $values) {
			   $return[$i][$key] = $values;
		   }
	   }
	   $i++;
   }
   return $return;      
}

 //查询的数据
 function select_connect_count($table = "", $connect_table = "", $on = "", $where = array())
 {
	$sql = "select count(*) as t_count from ".$table." left join ".$connect_table." on ".$on."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql .= "".$key." = '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
	$result = mysql_query($sql); 	//echo $sql;
	$object = mysql_fetch_array($result, MYSQL_ASSOC);
	return $object['t_count'];       
 }
 
 //查询的总数
 function select_count($table = "", $where = array())
 {
	$sql = "select count(*) as t_count from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			if ($key == "from") $key = "`from`";
			$sql .= "".$key."= '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	}

	$result = mysql_query($sql); 	
	$object = mysql_fetch_array($result, MYSQL_ASSOC);
	return $object['t_count'];   
 }

 //查询的行数
 function select_row_count($table = "")
 {
    $sql = "select count(*) as t_count from ".$table."";

	$result = mysql_query($sql); 	
	$object = mysql_fetch_array($result, MYSQL_ASSOC);
	return $object['t_count'];   
 }
 
 
  //查询的数据
 function select_like_limit($table = "", $where = array(), $where_like = array(), $limit = "", $order = "")
 {
	$sql = "select * from ".$table." where 1 = 1 and ";
	if (!empty($where)) {
		foreach ($where as $key => $values) {
			if ($key == "from") $key = "`from`";
			$sql .= "".$key."= '".$values."' and ";
		} 
	} 
	if (!empty($where_like)) {
		foreach ($where_like as $key => $values) {
			$sql .= "".$key." like '%".$values."%' and ";
		} 
	}
	$sql = substr(trim($sql), 0, -3);
	if (!empty($order))  $sql .= " order by ".$order."";
	if (!empty($limit))  $sql .= " limit ".$limit;  //echo $sql;
	$result = mysql_query($sql);//echo $sql;
	$return = array();
	$i = 0;
	while($object = mysql_fetch_array($result, MYSQL_ASSOC)){
		if (!empty($object)) {
			foreach ($object as $key => $values) {
				$return[$i][$key] = $values;
			}
		}
		$i++;
	}
    return $return;      
 }
 
 //查询的总数
 function select_like_count($table = "", $where = array(), $where_like = array())
 {
	$sql = "select count(*) as t_count from ".$table." where 1 = 1 and ";
	if (!empty($where)) {
		foreach ($where as $key => $values) {
			if ($key == "from") $key = "`from`";
			$sql .= "".$key."= '".$values."' and ";
		} 
	} 
	if (!empty($where_like)) {
		foreach ($where_like as $key => $values) {
			$sql .= "".$key." like '%".$values."%' and ";
		} 
	}
	$sql = substr(trim($sql), 0, -3);
// echo $sql;
	$result = mysql_query($sql); 	
	$object = mysql_fetch_array($result, MYSQL_ASSOC);
	return $object['t_count'];   
 }
 
 //删除数据
 function delete($table = "", $where = array()){
	$sql = "delete from ".$table."";
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql .= "".$key." = '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	}
	$result = mysql_query($sql); 
	return mysql_affected_rows();
 }
 //更新数据
 function update($table = "", $params = array(), $where = array()){
	if (!empty($params)) {
		$sql="update ".$table." set ";
		foreach ($params as $key => $values) {
			$sql = $sql."`".$key."` = '".$values."' , ";
		} 
		$sql = substr(trim($sql), 0, -1);
	}
	if (!empty($where)) {
		$sql .= " where ";
		foreach ($where as $key => $values) {
			$sql = $sql."".$key." = '".$values."' and ";
		} 
		$sql = substr(trim($sql), 0, -3);
	} 
	$result = mysql_query($sql);  
	return mysql_affected_rows();
}



/* 
Utf-8、gb2312都支持的汉字截取函数 
cut_str(字符串, 截取长度, 开始长度, 编码); 
编码默认为 utf-8 
开始长度默认为 0 
*/ 
function cut_str($string, $sublen, $start = 0, $code = 'UTF-8') 
{ 
	if($code == 'UTF-8') 
	{ 
		$pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/"; 
		preg_match_all($pa, $string, $t_string); 
		if(count($t_string[0]) - $start > $sublen) {
			// return join('', array_slice($t_string[0], $start, $sublen))."…"; 
			return join('', array_slice($t_string[0], $start, $sublen)); 
		}
		return join('', array_slice($t_string[0], $start, $sublen)); 
	} 
	else 
	{ 
		$start = $start*2; 
		$sublen = $sublen*2; 
		$strlen = strlen($string); 
		$tmpstr = ''; 
		for($i=0; $i< $strlen; $i++) 
		{ 
			if($i>=$start && $i< ($start+$sublen)) 
			{ 
				if(ord(substr($string, $i, 1))>129) 
				{ 
					$tmpstr.= substr($string, $i, 2); 
				} 
				else 
				{ 
					$tmpstr.= substr($string, $i, 1); 
				} 
			} 
			if(ord(substr($string, $i, 1))>129) $i++; 
		} 
		// if(strlen($tmpstr)< $strlen ) $tmpstr.= "…"; 
		
		return $tmpstr; 
	} 
} 
function get_client_ip() { 
    if ($_SERVER['REMOTE_ADDR']) {
        $cip = $_SERVER['REMOTE_ADDR']; 
        } elseif (getenv("REMOTE_ADDR")) {
            $cip = getenv("REMOTE_ADDR");  
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $cip = getenv("HTTP_CLIENT_IP"); 
        } else {
            $cip = "unknown";
        } 
        return $cip; 
}
        
?>