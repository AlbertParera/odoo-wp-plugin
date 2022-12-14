<?php 

use \PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\ClientException;

class CF7Posts_Test extends TestCase {

	public function setUp (): void {
		$this->client = new Client();
	}

	public function test_get_contact_forms () {
		try {
			$response = $this->client->request(
				"GET", "http://localhost:8000/wp-json/odoo_conn/v1/get-contact-7-forms"
			);
		} catch (ClientException $e) {
			$this->assertEquals(401, $e->getResponse()->getStatusCode());
		}
	}
}

?>