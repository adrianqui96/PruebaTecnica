<?php
class PersonData {
	public static $tablename = "cliente";
	public function PersonData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}
public function rol(){ return cargoData::getById($this->cargo_id);}

        public function poliza(){ return PolizaData::getById($this->poliza_id); }
        public function empleadeducion(){ return DeduccionData::getById($this->deducion_id); }
        
        
        
   

	public function add(){
		$sql = "insert into cliente (cedula,name,lastname,email,image,phone,address,status,users_id,created_at) ";
		$sql .= "value (\"$this->cedula\",\"$this->name\",\"$this->lastname\",\"$this->email\",\"$this->image\",\"$this->phone\",\"$this->address\",\"$this->status\",$this->users_id,$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",email=\"$this->email\",phone=\"$this->phone\",lastname=\"$this->lastname\",image=\"$this->image\",status=\"$this->status\",address=\"$this->address\",users_id=$this->users_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PersonData());
	}
	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonData());
	}


	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonData());
	}


}

?>