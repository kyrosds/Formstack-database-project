<?php
namespace app\mysqlconnector;

class Sql {
  /**
  * @var SELECT_ALL selects from database table.
  */
  const SELECT_ALL = 'SELECT * FROM';

  /**
  * Database constructor.
  * @param $user
  * @param $pass
  * @param $dbName
  * return void
  */
  function __construct( $user, $pass, $dbName ) {
    require_once 'meekrodb.2.3.class.php'

    $this->user = $user;
    $this->pass = $pass;
    $this->dbName = $dbName;
  }

  /**
  * Seaches database for user by id.
  * @param $databaseName
  * @param $field
  * @param $value
  * @return string
  */
  public function readByID( $databaseName, $field, $value ) {

    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query( self::SELECT_ALL . $tableName . 'WHERE' . $field . '=' . $value );

    return $results;
  }

  /**
  * Displays all users within the database.
  * @param $databaseName
  * @return string
  */
  public function readDb( $databaseName ) {
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query( self::SELECT_ALL . $tableName );

    return $results;
  }

  /**
  * Creates a new user in the database.
  * @param $databaseName
  * @param $firstName
  * @param $lastName
  * @param $email
  * @param $password
  * @return string
  */
  public function create( $databaseName, $firstName, $lastName, $email, $password ) {
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query( 'INSERT INTO' . $databaseName . "( firstName, lastName, email, password ) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $password . "' );" );

    return \DB::insertId();
  }

  /**
  * Updates a user within the database.
  * @param $databaseName
  * @param %id
  * @param $firstName
  * @param $lastName
  * @param $email
  * @param $password
  * @return string
  */
  public function update( $databaseName, $id, $firstName, $lastName, $email, $password ) {
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query('UPDATE' . $tableName . "' SET firstName = '" . $firstName . "', lastName = '" . $lastName . "', email = '" . $email . "', password = '" . $password . "' WHERE Users.id = " . $id . ";");

    return $results;
  }

  /**
  * Deletes a user from the database.
  * @param $databaseName
  * @param $field
  * @param $value
  * @return string
  */
  public function delete( $databaseName, $field, $value ) {
    \DB::$user = $this->user;
    \DB::$password = $this->pass;
    \DB::$dbName = $this->dbName;

    $results = \DB::query('DELETE FROM' . $databaseName . 'WHERE' . $field . '=' . $value);

    return $results;
  }
}
 ?>
