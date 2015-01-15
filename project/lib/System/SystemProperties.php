<?php

	namespace lib\System;
	
	class SystemProperties
	{
	
		const VERSION = '0.0.1';
		const SERVERNAME = 'Contribuy';
		const OWNER = 'Luiz Mazia';
	
		public function __construct()
		{
		
			echo self::SERVERNAME . '(C); Versão: ' . self::VERSION . ' - ' . self::OWNER;
		
		}
	
	}