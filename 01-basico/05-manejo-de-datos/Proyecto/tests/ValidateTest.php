<?php 

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {
    public function test_email()
    {
        $email = Validate::email('jhillcoat@gmail.com');
        $this->assertTrue($email);
    }
}