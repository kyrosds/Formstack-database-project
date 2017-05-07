<?php
require_once dirname(__FILE__) . '/../models/user.php';
require_once dirname(__FILE__) . '/../mysqlConnector.php';

/**
* Controller for functionality of menu
**/
class MenuController {
	/**
	* @var $db = database
	**/

	private $db;

	/**
	* @var TABLE = user table name.
	**/
	const TABLE = 'users';

	/**
	* Constructs database connector
	* @param none
	* return void
	**/
	public function __construct() {
		$this->db = new Sql('127.0.0.1', 'root', 'password', 'my_database');
	}

	/**
  * displays the user by id.
  * @param array $args
  * @return array
  */
	public function displayUserById(array $args = array()) {
		$id = $args[0];

		return json_encode($this->db->readByID( self::TABLE, 'id', $id));
	}

	/**
  * displays the database.
  * @param none
  * @return void
  */
	public function view() {
		return json_encode( $this->db->readDb( self::TABLE ));
	}

	/**
  * Creates a new user.
  * @param array $args
  * @return array
  */
	public function create(array $args = array()) {
		$firstName = $args[0];
		$lastName = $args[1];
		$email = $args[2];
		$password = $args[3];

		return $this->db->create( self::TABLE, $firstName, $lastName, $email, $password);
	}

	/**
  * Updates users within the database.
  * @param array $args
  * @return array
  */
	public function update(array $args = array()) {
		$id = $args[0];
		$firstName = $args[1];
		$lastName = $args[2];
		$email = $args[3];
		$password = $args[4];

		return json_encode( $this->db->update( self::TABLE, $id, $firstName, $lastName, $email, $password));
	}

	/**
  * Deletes a user within the database.
  * @param array $args
  * @return array
  */
	public function delete(array $args = array()) {
		$id = $args[0];

		return json_encode($this->db->delete( self::TABLE, 'id', $id));
	}
}
?>
