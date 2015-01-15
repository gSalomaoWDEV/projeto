<?php

	namespace lib\Functions;
	
	class CheckLength
	{
	
		public $char;
		public $verifyType;
		public $pattern;
		public $result = null;
		
		public function __construct($char, $verifyType, $pattern)
		{
		
			$this->char = $char;
			$this->verifyType = $verifyType;
			$this->pattern = $pattern;
		
		}
		
		public function checkUpper(){
		
			if(strlen($this->char) > $this->pattern)
			{
			
				return $this->result = "Maior";
			
			}
		
		}
		
		public function checkLower()
		{
		
			if(strlen($this->char) < $this->pattern)
			{
			
				return $this->result = "Menor";
			
			}
		
		}
		
		public function __destruct(){
		
			if(empty($this->char))
			{
				
				return $this->result = "Preencha este valor.";
			
			} else {
			
			if($this->verifyType == "upper")
			{
			
				return $this->checkUpper($this->char);
			
			}
			
			}
		
		}
	
	}