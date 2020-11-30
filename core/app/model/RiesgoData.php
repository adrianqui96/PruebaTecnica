<?php
class RiesgoData {
	public static $tablename = "riesgo";


	public function RiesgoData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->user_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}
        	public function getpoliza(){ return PolizaData::getById($this->poliza_id); }

	public function add(){
		$sql = "insert into ".self::$tablename." (name,poliza_id,status,created_at) ";
		echo $sql .= "value (\"$this->name\",\"$this->poliza_id\",\"$this->status\",$this->created_at)";
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
		$sql = "update ".self::$tablename." set name=\"$this->name\",sueldo=\"$this->sueldo\",status=\"$this->status\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RiesgoData());
	}
	public static function getByIdmucho($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RiesgoData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RiesgoData());
	}


	public static function getLast10(){
		$sql = "select * from ".self::$tablename." order by created_at desc limit 10";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RiesgoData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or content like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RiesgoData());
	}


}

?>