<?php 

namespace app\models;

class User extends Model
{
	protected $table = 'users';

	// public function insert(array $attributes)
	// {
	// 	$sql = "INSERT INTO {$this->table} (name, email, password, gender) VALUES (:name, :email, :password, :gender)";
	// 	$insert = $this->connection->prepare($sql);
		
	// 	foreach ($attributes as $key => $value) {
	// 		$insert->bindValue($key, $value);
	// 	}

	// 	return $insert->execute();
	// }
	 
	// public function update(array $attributes)
	// {
	// 	$sql = "UPDATE {$this->table} SET name = :name, email = :email, password = :password, state = :state, city = :city, district = :district, address = address";
	// 	$update = $this->connection->prepare($sql);
	// 	$update->execute($attributes);

	// 	return $update->rowCount();
	// }
	
	
}