<?php
/**
 * class for dynamic html framework 
 * */
abstract class html {
	
	/**
	 * creates html-header
	 * */
	public function head() {
		
	}
	/**
	 * creates form 
	 * */
	public function form ($target,$legend, $array) {
		$html = '<form method="post" action="'.$GLOBALS["webAppPath"].'/'.$target.'">';
		$html .= '<fieldset>';	
		$html .= '<legend>'.$legend.'</legend>';	
		foreach ($array as $key => $value) {
				$html .= '<div>';
            	$html .= '<label for="'.$key.'">'.$key.'</label>';
            	$html .= '<input type="'.$key.'" id="'.$key.'" required="required" class="box_shadow" name="'.$key.'"/>';
				$html .= '</div>';			
		}
		$html .= '<input type="submit" name="submit" value="add"/>';
		$html .= '<input type="reset" name="reset" value="clear"/>';
		$html .= '</fieldset>';
		$html .= '</form>';
		return $html;
	 }

}
?>
