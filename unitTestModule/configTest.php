<?php  

	class configTest extends PHPUnit\Framework\TestCase{
	
		private $op;

		public function setUp():void{
			$this->op = new site();
		}

		public function testSelectOption(){
			$this->assertEquals('Opcion 1', $this->op->selectOption(1));
		}

	}
?>