<?php
/**
 * class for dynamic html framework 
 * 
 * \n is needed after every string to create a clean code
 * */
abstract class html {
	
	
	/**
	 * creates html-header
	 * */
	private function head() {
		$html = '<head>'."\n";
		$html .= '<meta charset=utf-8>'."\n";
		$html .= '<title>'.$GLOBALS["title"].'</title>'."\n";
		$html .= '</head>'."\n";
		return $html;
	}
	/**
	 *  creates html-footer
	 * */
	 private function footer () {
		 
		 }
	/**
	 *  generic function for assembling a custom string in html framework
	 * */
	public function out($in) {
		return $this->buildPage($in);
	}
	/**
	 * creates embedded form for adding
	 * */
	public function form ($target,$legend, $array) {
		$html = '<form method="post" action="'.$GLOBALS["webAppPath"].'/'.$target.'">'."\n";
		$html .= '<fieldset>'."\n";
		$html .= '<legend>'.$legend.'</legend>'."\n";
		foreach ($array as $key => $value) {
				$html .= '<div>'."\n";
            	$html .= '<label for="'.$key.'">'.$key.'</label>'."\n";
            	$html .= '<input type="'.$key.'" id="'.$key.'" required="required" class="box_shadow" name="'.$key.'"/>'."\n";
				$html .= '</div>'."\n";
		}
		$html .= '<input type="submit" name="submit" value="add"/>'."\n";
		$html .= '<input type="reset" name="reset" value="clear"/>'."\n";
		$html .= '</fieldset>'."\n";
		$html .= '</form>'."\n";
		return $this->buildPage($html);
	 }
	 
	 /**
	  * assemble the whole stuff 
	  * */
	 private function buildPage($in) {
		 $html = '<html>'."\n";
		 $html .= $this->head()."\n";
		 $html .= '<body>'."\n";
		 $html .= $in."\n";
		 $html .= $this->footer()."\n";
		 $html .= '</body>'."\n";
		 $html .= '</html>'."\n";
		 return $html;
	 }

}
?>
