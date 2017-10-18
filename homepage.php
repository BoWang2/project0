<?php 
class homepage extends page 
{
	public function get()
	{
		$this->html .= stringfunctions::printThis("Welcome");
		header('Location:index.php?page=upload');
	}
    
}



 ?>
 