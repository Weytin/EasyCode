<?php
/*
 * Model - EasyCode
 *
 * @author Weytin
*/
if(!defined('INDEX')) { die('This file contains valid information, which you cannot view.'); }
class Log
{
	private $levels = array(
							1 => 'EMERGENCY',
                            2 => 'CRITICAL',
                            3 => 'WARNING',
                            4 => 'NOTICE',
                            5 => 'GENERAL',
						);
						
	private $errorLog = 'engine/logs/errorlog.php';
	
	private $generalLog = 'engine/logs/log.php';
	
	public function _construct()
	{
		/*
		 * TODO: Add some dynamic code in here.
		*/
	}
	
	public function writeErrorLog($txt = null, $levels = 5)
	{
		if(is_writeable($this->errorLog))
		{
			if(!isset($this->errorFile))
			{
				$this->errorFile = fopen($this->errorLog, 'w');
			}
			
			fwrite($this->logFile, '[' . date('H:i:s') . '] ' . '[' . $this->level[$level] . '] ' . $txt . PHP_EOL) || die('Could not write to ' . $this->generalLog, E_USER_ERROR);
        
            $this->levelAct($level, $txt);
		}
	}
	
	public function writeLog($txt = null, $levels = 5)
	{
	
	}
	
	public function levelAct($level, $txt)
	{
		switch($level)
        {
            case 1:
                die($txt);
            break;
                
            case 2:
                die($txt, E_STRICT);
            break;
        
            case 3:
                die($txt, E_USER_WARNING);
            break;
        
            default:
                //Move on
            break;
        }
	}
}
?>