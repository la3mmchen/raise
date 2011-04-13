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
	public function form ($legend, $array) {
		$html = '<form>\n';
		$html .= '<fieldset>\n';	
		$html .= '<legend>'.$legend.'</legend>\n';	
		foreach ($array as $key => $value) {
				$html .= '<div>';
            	$html .= '<label for="'.$key.'">'.$key.'</label>';
            	$html .= '<input type="'.$key.'" id="'.$key.'" required="required" class="box_shadow" name="idea_name"/>';
				$html .= '</div>';			
		}
		$html .= '</fieldset>\n';	
		$html .= '</form>\n';	
		return $html;
		
	 }

}
?>
