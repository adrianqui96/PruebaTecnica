<?php
class EmplehojaData {
	public static $tablename = "clientepoliza";


	public function EmplehojaData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->user_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}
	
	
	public function add(){
		$sql = "insert into ".self::$tablename." (riesgo_id) ";
		echo $sql .= "value (\"$this->riesgo_id\")";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto KindData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",kind=\"$this->kind\",tipos=\"$this->tipos\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
			$sql = "select * from ".self::$tablename." where empleados_id=".$id;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmplehojaData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." where tipos=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmplehojaData());
	}

	

	public static function getLast10(){
		$sql = "select * from ".self::$tablename." order by created_at desc limit 10";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmplehojaData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or content like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmplehojaData());
	}


}

?>