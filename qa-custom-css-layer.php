<?php
class qa_html_theme_layer extends qa_html_theme_base {
	function head_custom() {
		qa_html_theme_base::head_custom();
		$this->output('<style>',qa_opt('q2a_custom_css_template'),'</style>');
		$this->output('<style>',qa_opt('q2a_custom_css_plugin'),'</style>');
	}
}
