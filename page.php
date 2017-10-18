<?php 
abstract class page 
{
    protected $html;

    public function __construct()
    {
        $this->html .= htmltage::htmlhead();
        $this->html .= '<link rel="stylesheet" href="styles.css">';
        $this->html .= htmltage::htmlbody();
    }
    public function __destruct()
    {
    	$this->html .=html::htmlbodyend();
        $this->html .= html::htmlend();
        stringfunctions::printThis($this->html);
    }	

}

?>
 