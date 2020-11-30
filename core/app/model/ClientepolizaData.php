<?php
class ClientepolizaData {
	public static $tablename = "clientepoliza";


	public function ClientepolizaData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->user_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}
	public function getcliente(){ return PersonData::getById($this->cliente_id); }
	public function getUser(){ return UserData::getById($this->user_id); }
	public function getpoliza(){ return RiesgoData::getById($this->riesgo_id); }
	public function getpolizamucho(){ return RiesgoData::getByIdmucho($this->riesgo_id); }
	public function getpoliza2(){ return PolizaData::getById($this->polize_id); }

	
	public function add(){
		$sql = "insert into ".self::$tablename." (empleados_id,nestudios_id,intitucion_id,años) ";
		echo $sql .= "value (\"$this->empleados_id\",\"$this->nestudios_id\",\"$this->intitucion_id\",\"$this->años\")";
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
			$sql = "select * from ".self::$tablename." where cliente_id=".$id;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientepolizaData());
	}
	public static function getByIdpolice($id){
			$sql = "select * from ".self::$tablename." where riesgo_id=".$id;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientepolizaData());
	}
	public static function getById2($id){
		$sql = "select * from ".self::$tablename." where cliente_id=".$id;
		$query = Executor::doit($sql);
		return Model::one($query[0],new ClientepolizaData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." where tipos=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientepolizaData());
	}

	

	public static function getLast10(){
		$sql = "select * from ".self::$tablename." order by created_at desc limit 10";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientepolizaData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or content like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientepolizaData());
	}


}

?>