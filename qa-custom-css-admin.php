<?php
class qa_custom_css_admin {
	function allow_template($template) {
		return ($template!='admin');
	}

	function option_default($option) {

		switch($option) {
			case 'template-css':
				return '';
			case 'plugin-css':
				return '';
			default:
				return null;

		}
	}
	

	function admin_form(&$qa_content){
		// process the admin form if admin hit Save-Changes-button
		$ok = null;
		if (qa_clicked('q2a_custom_css_save')) {
			qa_opt('q2a_custom_css_template', qa_post_text('q2a_custom_css_template'));
			qa_opt('q2a_custom_css_plugin', qa_post_text('q2a_custom_css_plugin'));
			$ok = qa_lang('admin/options_saved');
		}
		
		// form fields to display frontend for admin
		$fields = array();
		
		$fields[] = array(
			'type' => 'textarea',
			'label' => 'css for template',
			'tags' => 'name="q2a_custom_css_template"',
			'value' => qa_opt('q2a_custom_css_template'),
		);
		
		$fields[] = array(
			'type' => 'textarea',
			'label' => 'css for plugin',
			'tags' => 'name="q2a_custom_css_plugin"',
			'value' => qa_opt('q2a_custom_css_plugin'),
		);

		return array(     
			'ok' => ($ok && !isset($error)) ? $ok : null,
			'fields' => $fields,
			'buttons' => array(
				array(
					'label' => 'save',
					'tags' => 'name="q2a_custom_css_save"',
				),
			),
		);
	}
}

