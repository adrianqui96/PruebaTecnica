<?php
class UserData {
	public static $tablename = "users";

	public function rol(){ return RolData::getById($this->rol_id); }


	public function Userdata(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into users (cedula,name,lastname,username,email,image,rol_id,password,created_at) ";
		$sql .= "value (\"$this->cedula\",\"$this->name\",\"$this->lastname\",\"$this->username\",\"$this->email\",\"$this->image\",$this->rol_id,\"$this->password\",$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",email=\"$this->email\",username=\"$this->username\",lastname=\"$this->lastname\",image=\"$this->image\",status=\"$this->status\",comision=$this->comision,rol_id=$this->rol_id,departamento_id=$this->departamento_id where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;		
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}
 public static function getvendedor(){
		$sql = "select * from ".self::$tablename." where kind=3";		
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}
public static function getbyemail($email){
           $sql = "select * from ".self::$tablename." where email=\"$email\"";
           $query= Executor::doit($sql);
           return Model::one($query[0], new UserData());
        }
public static function getbyusername($username){
            $sql = "select * from ".self::$tablename." where username=\"$username\"";
           $query= Executor::doit($sql);
           return Model::one($query[0], new UserData());
        }

}

?>