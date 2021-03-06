<?php

namespace Habari;

/**
 * A fieldset control based on FormControl for output via a FormUI.
 */
class FormControlFieldset extends FormContainer
{

	public $caption = '';

	/**
	 * Set the caption for this fieldset
	 * @param $caption
	 * @return FormControlFieldset $this
	 */
	public function set_caption($caption)
	{
		$this->caption = $caption;
		return $this;
	}

	/**
	 * Produce the HTML for this control
	 * @param Theme $theme The theme used for rendering
	 * @return string The rendered control in HTML
	 */
	function get(Theme $theme)
	{
		$this->vars['caption'] = $this->caption;
		return parent::get($theme);
	}
}

?>