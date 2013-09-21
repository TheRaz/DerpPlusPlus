<?php
/**
 * DERP++ Interpreter
 *
 * @author     Raz <raz@theraz.se>
 *
 * @license    Public Domain
 * @version    0.1
 * @link       https://github.com/TheRaz/DerpPlusPlus
 */
class derpplusplus {

	public $pointer = 0; 
	public $memory;
	public $program;
	public $position;

	public function __construct() {
		$this->memory = array_fill(0, 30000, 0);
	}
	public function interpret($code,$input = '') {
		$code = str_replace(array('HERP', 'DERP', 'HURR', 'DURR', 'GIGGITY', 'GOO', 'WOOPY', 'DOO'),array('HERPQ', 'DERPQ', 'HURRQ', 'DURRQ', 'GIGGITYQ', 'GOOQ', 'WOOPYQ', 'DOOQ'),$code);
		$this->program = explode('Q',$code);
		$input = str_split($input);
		$input_position = 0;

		for($this->position = 0; $this->position < count($this->program); $this->position++) {
			$operation = strtoupper($this->program[$this->position]);
			switch($operation) {
				case 'HERP':
					$this->pointer++;
				break;
				case 'DERP':
					$this->pointer--;
				break;
				case 'HURR':
					$this->memory[$this->pointer]++;
				break;
				case 'DURR':
					$this->memory[$this->pointer]--;
				break;
				case 'GIGGITY':
					print chr($this->memory[$this->pointer]);
				break;
				case 'GOO':
					if(isset($input[$input_position])) {
						$this->memory[$this->pointer] = ord($input[$input_position]);
					}
					$input_position++;
				break;
				case 'WOOPY':
					if(!$this->memory[$this->pointer]) {
						$counter = 1;
						while($counter) {
							switch($this->program[++$this->position]) {
								case 'WOOPY': 
									++$counter;
								break;
								case 'DOO':
									--$counter;
								break;
							}
						}
					}
				break;
				case 'DOO':
					$counter = 1;
					while($counter) {
						switch($this->program[--$this->position]) {
							case 'DOO': 
								++$counter;
							break;
							case 'WOOPY':
								--$counter;
							break;
						}
					}
					--$this->position;
				break;
			}
		} 
	}
} 
