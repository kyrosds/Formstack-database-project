<?php
/**
* Class for creating, reading, and modifying the database.
*/
class Sql {
  /**
  * @var SELECT_ALL selects from database table.
  */
  const SELECT_ALL = ' SELECT * FROM ';

  /**
  * Database constructor.
  * @param $host
  * @param $user
  * @param $pass
  * @param $dbName
  * return void
  */
  function __construct( $host, $user, $pass, $dbName ) {
    require_once 'meekrodb.2.3.class.php';

    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->dbName = $dbName;
  }

  /**
  * Seaches database for user by id.
  * @param $tableName
  * @param $field
  * @param $value
  * @return string
  */
  public function readByID( $tableName, $field, $value ) {
    \DB::$host = $this->host;
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query( self::SELECT_ALL . $tableName . " WHERE " . $field . " = " . $value );

    return $results;
  }

  /**
  * Displays all users within the database.
  * @param $tableName
  * @return string
  */
  public function readDb( $tableName ) {
    \DB::$host = $this->host;
    \DB::$host = $this->host;
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query( self::SELECT_ALL . $tableName );

    return $results;
  }

  /**
  * Creates a new user in the database.
  * @param $tableName
  * @param $firstName
  * @param $lastName
  * @param $email
  * @param $password
  * @return string
  */
  public function create( $tableName, $firstName, $lastName, $email, $password ) {
    \DB::$host = $this->host;
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query( 'INSERT INTO ' . $tableName . " ( firstName, lastName, email, password ) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $password . "' );" );

    return \DB::insertId();
  }

  /**
  * Updates a user within the database.
  * @param $tableName
  * @param %id
  * @param $firstName
  * @param $lastName
  * @param $email
  * @param $password
  * @return string
  */
  public function update( $tableName, $id, $firstName, $lastName, $email, $password ) {
    \DB::$host = $this->host;
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query('UPDATE ' . $tableName . " SET firstName = '" . $firstName . "', lastName = '" . $lastName . "', email = '" . $email . "', password = '" . $password . "' WHERE Users.id = " . $id . ";" );

    return $results;
  }

  /**
  * Deletes a user from the database.
  * @param $tableName
  * @param $field
  * @param $value
  * @return string
  */
  public function delete( $tableName, $field, $value ) {
    \DB::$host = $this->host;
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query('DELETE FROM ' . $tableName . " WHERE " . $field . " = " . $value);

    return $results;
  }
}
 ?>
