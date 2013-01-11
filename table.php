<?php
namespace tablo;

$num = 912;
$f = new Tablo($num);
echo '<pre>'; print_r($f->getNum()); 

class Tablo
{

	private $num;
	private $chisla = array();

	public function __construct($num)
    {
        $this->num = $num;
		$chisla = array(
				'0' => '&nbsp;_&nbsp;<br />|&nbsp;&nbsp;|<br />|_|',
				'1' => '&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;|<br />&nbsp;&nbsp;|',
				'2' => '&nbsp;_&nbsp;<br />&nbsp;_|<br />|_&nbsp;',
				'3' => '&nbsp;_&nbsp;<br />&nbsp;_|<br />&nbsp;_|',
				'4' => '&nbsp;&nbsp;&nbsp;<br />|_|<br />&nbsp;&nbsp;|',
				'5' => '&nbsp;_&nbsp;<br />|_&nbsp;<br />&nbsp;_|',
				'6' => '&nbsp;_&nbsp;<br />|_&nbsp;<br />|_|',
				'7' => '&nbsp;_&nbsp;<br />&nbsp;&nbsp;&nbsp;|<br />&nbsp;&nbsp;&nbsp;|',
				'8' => '&nbsp;_&nbsp;<br />|_|<br />|_|',
				'9' => '&nbsp;_&nbsp;<br />|_|<br />&nbsp;/&nbsp;',
			);
		$this->chisla = $chisla;
    }
	
	public function getNum() 
	{
		$return_num = $this->getRisovanie();

		return $return_num;
	}
	
	private function getRisovanie()
    {
        $arr = '<table><tr>';
		$n = (string)$this->num;
		foreach (range(0, strlen($n)-1) as $x) {
			$arr .= '<td width=25>';
			$arr .= $this->getLit($n[$x]);
			$arr .= '</td>';
		}		
		$arr .= '</tr></table>';
		
		return $arr;
    }
	
	private function getLit($n)
    {
		return $this->chisla[$n];
    }
	
}
