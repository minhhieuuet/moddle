<?php
class block_helloworld extends block_base {
		public function init() {
				$this->title = 'Hello word';
		}

		public function get_content() {
				if (! empty($this->config->text)) {
						$this->content->text = $this->config->text;
						return $this->content;
				}

				$this->content = new stdClass;
				$this->content->text = 'Hello word';
				return $this->content;
		}

		public function instance_allow_multiple() {
		  	return true;
		}

}
?>
