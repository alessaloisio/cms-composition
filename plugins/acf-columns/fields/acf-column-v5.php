<?php
/*
*  ACF Columns Field Class
*
*  All the logic for this field type
*
*  @class 		dhz_acf_field_column
*  @extends		acf_field
*  @package		ACF
*  @subpackage	Fields
*/

if( ! class_exists('dhz_acf_field_column') ) :

class dhz_acf_field_column extends acf_field {
	
	
	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		// vars
		$this->name = 'column';
		$this->category = 'layout';
		$this->label = __('Column', 'acf_column');
		$this->defaults = array(
			'column-type' => '1_2'
		);
		
		$this->settings = array(
			'version'	=> '1.2.1',
			'url'		=> plugin_dir_url( __DIR__ )
		);

		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('FIELD_NAME', 'error');
		*/
		
		$this->l10n = array();		
				
		// do not delete!
    	parent::__construct();
    	
	}
	
	
	/*
	*  render_field_settings()
	*
	*  Create extra settings for your field. These are visible when editing a field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field_settings( $field ) {
		
		/*
		*  acf_render_field_setting
		*
		*  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
		*  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
		*
		*  More than one setting can be added by copy/paste the above code.
		*  Please note that you must also have a matching $defaults value for the field name (font_size)
		*/
		
		acf_render_field_setting( $field, array(
			'label'			=> __('Column Count','acf_column'),
			'instructions'	=> __('At the end of the row add a column reset.','acf_column'),
			'type'			=> 'select',
			'name'			=> 'column-type',
			'class'         => 'column-type-select',
			'choices'       => array (
				'1_1'		=> __('Reset','acf_column'),
				'1_2'		=> __('One Half','acf_column'),
				'1_3'		=> __('One Third','acf_column'),
				'2_3'		=> __('Two Thirds','acf_column'),
				'1_4'		=> __('One Quarter','acf_column'),
				'3_4'		=> __('Three Quarters','acf_column'),
				'1_5'		=> __('One Fifth','acf_column'),
				'2_5'		=> __('Two Fifth','acf_column'),
				'3_5'		=> __('Three Fifth','acf_column'),
				'4_5'		=> __('Four Fifth','acf_column'),
				'1_6'		=> __('One Sixth','acf_column'),
				'1_8'		=> __('One Eighth','acf_column'),
			)
		));

	}	
	
	/*
	*  render_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field (array) the $field being rendered
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field( $field ) {
		
		
		/*
		*  Review the data of $field.
		*  This will show what data is available
		*/
		
		// echo '<pre>';
		// 	print_r( $field );
		// echo '</pre>';
		
		
		/*
		*  Create a simple text input using the 'font_size' setting.
		*/
		$atts = array(
			'class'		=> 'acf_column'
		);
		
		?>
		<div <?php acf_esc_attr_e( $atts ); ?>><?php echo $field['label']; ?></div>
		<?php
		
		echo '<div class="acf-column column-layout-' . $field['column-type'] . '" data-id="' . $field['key'] . '" data-column="' . $field['column-type'] . '">&nbsp;</div>';
		?>
		<?php
	}
	
		
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add CSS + JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function input_admin_enqueue_scripts() {

		$url = $this->settings['url'];
		$version = $this->settings['version'];
		
		// register & include JS
		wp_register_script( 'acf-input-column-js', "{$url}assets/js/acf-column.js", false, $version);
		
		// register & include CSS
		wp_register_style( 'acf-input-column-css', "{$url}assets/css/acf-column.css", false, $version);
		wp_register_style( 'acf-input-column-css-rtl', "{$url}assets/css/acf-column-rtl.css", array('acf-input-column-css'), $version);

		wp_enqueue_script('acf-input-column-js');
		wp_enqueue_style('acf-input-column-css');
		if ( is_rtl() ) {
			wp_enqueue_style('acf-input-column-css-rtl');
		}
		
	}	
	
}


// create field
new dhz_acf_field_column();

endif; // class_exists check

?>