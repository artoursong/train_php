<?php
class products_model extends main_model
{
    public function addRecord($datas)
    {
        $fields = $values = '';
		$i=0;
		foreach($datas as $k=>$v) {
			if($i) {
				$fields .=',';
				$values .=',';
			}
			$fields .= $k;
			$values .= "'".$v."'";
			$i++;
		}

		$fields .= ',create_at';
		$values .= ',curdate()';

		$query = "INSERT INTO $this->table ($fields) VALUES ($values)";
		return mysqli_query($this->con,$query);
    }

	public function editRecord($id,$datas){
		$setDatas = '';
		$i=0;
		foreach($datas as $k=>$v) {
			if($i) {
				$setDatas .=',';
			}
			$setDatas .= $k."='".$v."'";
			$i++;
		}

		$setDatas .= ", update_at = curdate()";

        $query = "UPDATE $this->table SET $setDatas WHERE id='$id'";
		return mysqli_query($this->con,$query);
        //$result = mysqli_query($this->con,$query) or die("MySQL error: " . mysqli_error($this->con) . "<hr>\nQuery: $query");
    }
}
