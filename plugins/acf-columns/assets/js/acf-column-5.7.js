(function($){


	var Field = acf.Field.extend({
		
		wait: false,
		type: 'column',
		
		initialize: function(){

			that = this.$el;

			that.each(function() {
				var acf_field_column = $(this),
					columns = acf_field_column.find('.acf-column[class*="column-layout"]').data('column'),
					orig_key = acf_field_column.find('.acf-column[class*="column-layout"]').data('id'),
					key = "acf-" + orig_key.replace("_", "-"),
					colClass = '',
					is_collapse_field = '';

				acf_field_column.find('.acf-column').each(function() {
					var root = $(this).parents('.acf-field-column'),
						Conditions = '',
						colData = '';
					if ( columns == '1_1' ) {
						acf_field_column.replaceWith('<div class="acf-field acf-field-columngroup column-end-layout"></div>');
					} else {
						var acf_fields = $(root).nextUntil('.acf-field-column');

						acf_fields.each(function() {
							if ( $(this).hasClass('-collapsed-target') ) {
								is_collapse_field = ' -collapsed-target';
								return is_collapse_field;
							}
						});

						
						colClass = 'acf-field acf-field-columngroup ' + key + ' column-layout-' + columns;

						if (typeof acf_field_column.data('conditions') !== 'undefined') {	
							colData = "data-conditions='"+JSON.stringify(acf_field_column.data('conditions'))+"'";
						}

						$(root)	.nextUntil('.acf-field-column')
								.removeClass('hidden-by-tab')
								.wrapAll('<div class="' + colClass + is_collapse_field + '" data-key="' + orig_key + '" ' + colData +'></div>');
						acf_field_column.remove();
					}
				})
			})
		},
		
	});
	
	acf.registerFieldType( Field );

	if ( typeof acf.add_action !== 'undefined' ) {
		
		acf.add_action('ready append', function( $el ){

		 	var acf_settings_cols = acf.model.extend({
		 		
		 		actions: {
		 			'open_field':			'render',
		 			'change_field_type':	'render'
		 		},
		 				
		 		render: function( $el ){
		 			
		 			// bail early if not correct field type
		 			if( $el.attr('data-type') != 'column' ) {
		 				
		 				return;
		 				
		 			}
		 		 			
		 			// clear name
		 			$el.find('.acf-field[data-name="name"] input').val('').trigger('change');
		 			
		 		}		
		 		
		 	});
			
			
			
		});
	}

})(jQuery);
