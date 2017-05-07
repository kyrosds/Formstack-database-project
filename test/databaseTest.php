<?php
require_once dirname(__FILE__) . './../controllers/menuController.php';

use PHPUnit\Framework\TestCase;

/**
* Extends PHPUnit giving access to the program, which allows for testing.
*/
class DatabaseTest extends TestCase {

  public function setUp() {
        parent::setUp();
        if (!defined('MYSQLI_OPT_CONNECT_TIMEOUT')) {
            define('MYSQLI_OPT_CONNECT_TIMEOUT', 3);
        }
    }
  /**
  * Test to display if user was created.
  * @param none
  * @return true if user was created.
  * @test
  */
  public function testUserCreated() {
    $control = new MenuController();

    $results = json_decode( $control->create(['Jane', 'Doe', 'janedoe@gmail.com', 'password']));

    $this->assertTrue( $results > 0 );
  }
  /**
  * Test to display single user by id.
  * @param none
  * @return true if id was found.
  * @test
  */
  public function testShowUser() {
    $control = new MenuController();

    $newId = $control->create(['Jane', 'Doe', 'janedoe@gmail.com', 'password']);

    $results = json_decode( $control->displayUserById([$newId]))[0];

    $this->assertEquals($results->firstName, 'Jane');
  }
  /**
  * Test to display all user in the database.
  * @param none
  * @return true if users are displayed.
  * @test
  */
  public function testShowAllUsers() {
    $control = new MenuController();

    $results = $control->view();

    $items = json_decode( $results );

    $this->assertTrue(sizeof( $items ) > 1 );
  }
  /**
  * Test to update data of a user within the database.
  * @param none
  * @return true if user is updated.
  * @test
  */
  public function testUserUpdated() {
    $control = new MenuController();

    $results = json_decode($control->update([0, 'Jane', 'Doe', 'janedoe@gmail.com', 'password' ]));

    $this->assertTrue($results, "true");
  }
  /**
  * Test if user was deleted from the database.
  * @param none
  * @return true if user was deleted.
  * @test
  */
  public function testUserDeleted() {
    $control = new MenuController();

    $results = json_decode($control->delete([0]));

    $this->assertTrue($results, "true");
  }
}
?>
