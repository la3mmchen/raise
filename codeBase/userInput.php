<?php
class userInput extends multiConstructor {
		private static $whiteList = array("@", ".", "-");
		private $rule;
		
		public function checkArray ($inputArray) {
			foreach ($inputArray as $i) {
				$this->checkWhiteList($i);
			}
		}
		
		private function filterUserInput ($input) {
			$filter = filter_input(INPUT_GET,"url", FILTER_SANITIZE_URL);
			var_dump($input);
		}
		
		private function rules () {
			
		}
		
		/* rule for handling user input for loading any content from ideacloud page */
		private function rule_load () {
				$this->rule= array("load"=>array("cloud", "tag", "answers"), 
									"tag"=>"FILTER_SANITIZE_STRING",
									"idForAnswers"=>"FILTER_VALIDATE_INT"
				); 								
		}
		/* handles user input for loading any content from ideacloud page */
		private function rule_addIdea() {
				$this->rule = array("idea_name"=>"",
						"idea_email"=>"", 
						"idea_description");
				);
		}
		

}


?>
