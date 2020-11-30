<?php
class RolData {
	public static $tablename = "rol";


	public function RolData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->user_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (name,kind,tipos,created_at) ";
		echo $sql .= "value (\"$this->name\",\"$this->kind\",\"$this->tipos\",$this->created_at)";
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
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RolData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." where tipos=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RolData());
	}
	public static function getAll2(){
		$sql = "select * from ".self::$tablename." where tipos=2";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RolData());
	}
	public static function getAll3(){
		$sql = "select * from ".self::$tablename." where tipos=2 and kind=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RolData());
	}

	public static function getLast10(){
		$sql = "select * from ".self::$tablename." order by created_at desc limit 10";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RolData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or content like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RolData());
	}


}

?>