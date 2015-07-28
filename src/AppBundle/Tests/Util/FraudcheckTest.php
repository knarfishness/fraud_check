// src/AppBundle/Tests/Util/FraudcheckTest.php
namespace AppBundle\Tests\Util;

use AppBundle\Util\Fraudcheck;

class FraudcheckTest extends \PHPUnit_Framework_TestCase
{
	public function testValidateSuccess()
	{
	    $fraud = new Fraudcheck();
	    $data = array( 'name' => '1', 'amount' => '4', 'address' => '1', 'city' => '1', 'state' => 'MI', 'zip' => '41234');
	    $result = $fraud->validateForm($data);

	    // assert that valiation succeeds
	    $this->assertEquals(true, $result['success']);
	}

	public function testValidateFail()
	{
	    $fraud = new Fraudcheck();
	    $data = array( 'name' => '1', 'amount' => '', 'address' => '1', 'city' => '1', 'state' => 'MD', 'zip' => '4124');
	    $result = $fraud->validateForm($data);

	    // assert that valiation fails
	    $this->assertEquals(false, $result['success']);
	}

	public function testFraudcheckSuccess()
	{
	    $fraud = new Fraudcheck();
	    $data = array( 'name' => '1', 'amount' => '4', 'address' => '1', 'city' => '1', 'state' => 'MI', 'zip' => '41234');
	    $result = $fraud->compareToPreviousData($data);

	    // assert that valiation fails
	    $this->assertEquals(true, $result);
	}

	public function testFraudcheckFail()
	{
	    $fraud = new Fraudcheck();
	    $data = array( 'name' => '1', 'amount' => '40000', 'address' => '1', 'city' => '1', 'state' => 'MI', 'zip' => '41234');
	    $result = $fraud->compareToPreviousData($data);

	    // assert that valiation fails
	    $this->assertEquals(false, $result);
	}
}