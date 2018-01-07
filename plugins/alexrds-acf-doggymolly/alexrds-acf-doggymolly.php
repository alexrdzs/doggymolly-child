<?php

/**
* Plugin Name: Doggy Molly ACF Plugin
* Description: Aquí van todas las funciones ACF.
* Author: alex rodríguez santibáñez
* Version: 0.1
*/


/*** ACF FIELDS CATEGORY ***/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5a383ea3af82b',
	'title' => 'Categorías',
	'fields' => array(
		array(
			'key' => 'field_5a386dff83e60',
			'label' => 'Subtítulo',
			'name' => 'subtitulo-inicial',
			'type' => 'text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a383eb973009',
			'label' => 'Texto Inicial',
			'name' => 'texto-inicial',
			'type' => 'textarea',

			'required' => 0,
			'conditional_logic' => 0,
		),
		array(
			'key' => 'field_5a383f3f7300a',
			'label' => 'Categoría de proudctos',
			'name' => 'cat_products',
			'type' => 'text',
			'instructions' => 'Nombre de la categoría a mostrar:',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array(
			'key' => 'field_5a386ece632b8',
			'label' => 'Título de Relacionados',
			'name' => 'titulo-interlinking',
			'type' => 'text',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array(
			'key' => 'field_5a386ea892f5d',
			'label' => 'Subtítulo Relacionados',
			'name' => 'subtitulo-interlinking',
			'type' => 'text',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array(
			'key' => 'field_5a39392efd68a',
			'label' => 'Categorías Relacionadas',
			'name' => 'rep-interlinking',
			'type' => 'repeater',
			'required' => 0,
			'conditional_logic' => 0,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'sub_fields' => array(
				array(
					'key' => 'field_5a3939d9fd691',
					'label' => 'Imagen Relacionado',
					'name' => 'imagen_relacionado',
					'type' => 'image',
		
					'required' => 0,
					'conditional_logic' => 0,
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array(
					'key' => 'field_5a3939b0fd68f',
					'label' => 'Título',
					'name' => 'titulo-relacionado',
					'type' => 'text',
		
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a393b12fd692',
					'label' => 'Texto Relacionado',
					'name' => 'texto_relacionado',
					'type' => 'text',
		
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a3939bcfd690',
					'label' => 'URL - Link',
					'name' => 'url_link',
					'type' => 'page_link',
		
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'page',
					),
					'taxonomy' => array(
					),
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'categoria.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',

	'active' => 1,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5a3955eb97d31',
	'title' => 'Homepage',
	'fields' => array(
		array(
			'key' => 'field_5a395c1af4ded',
			'label' => 'Sección 1',
			'name' => '',
			'type' => 'tab',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a39566a9bd8c',
			'label' => 'Imagen Secundaria',
			'name' => 'imagen_secundaria',
			'type' => 'image',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5a39567f9bd8d',
			'label' => 'Descripción Imagen Secundaria',
			'name' => 'descripcion_imagen_secundaria',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a3955f29bd86',
			'label' => 'Título Sección Secundaria',
			'name' => 'titulo_seccion_secundaria',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a3956049bd87',
			'label' => 'Subtítulo Sección Secundaria',
			'name' => 'subtitulo_seccion_secundaria',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a39565a9bd8b',
			'label' => 'Texto Secundario',
			'name' => 'texto_secundario',
			'type' => 'wysiwyg',
			'instructions' => 'Este es el texto que va en el segundo bloque antes del blog.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a395c35f4dee',
			'label' => 'Instagram Grid',
			'name' => '',
			'type' => 'tab',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a39561b9bd88',
			'label' => 'Título Instagram',
			'name' => 'titulo_instagram',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Meet our furrriends!',
			'placeholder' => 'Meet our furrriends!',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a3956239bd89',
			'label' => 'Subtítulo Instagram',
			'name' => 'subtitulo_instagram',
			'type' => 'wysiwyg',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<p>These are some pics from social media. Use <a href="">#mollysfriends</a> to be featured!</p>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a3956309bd8a',
			'label' => 'Texto Después de Instagram',
			'name' => 'texto_despues_de_instagram',
			'type' => 'textarea',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5a395e62f4def',
			'label' => 'Sección Final',
			'name' => 'seccion_final',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a3957809bd8f',
			'label' => 'Título Final',
			'name' => 'titulo_final',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a3957889bd90',
			'label' => 'Subtítulo Final',
			'name' => 'subtitulo_final',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a39578d9bd91',
			'label' => 'Texto Final',
			'name' => 'texto_final',
			'type' => 'textarea',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5a3957959bd92',
			'label' => 'Imagen Final',
			'name' => 'imagen_final',
			'type' => 'image',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5a39579c9bd93',
			'label' => 'Descripción Imagen Final',
			'name' => 'descripcion_imagen_final',
			'type' => 'text',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a395e82f4df0',
			'label' => 'Fin de Sección',
			'name' => '',
			'type' => 'tab',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-homepage.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',

	'active' => 1,
	'description' => '',
));

endif;

/// HOME CATS ///
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5a526bf939635',
	'title' => 'Home Categorías',
	'fields' => array(
		array(
			'key' => 'field_5a526c045420d',
			'label' => 'URL',
			'name' => 'url1',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a526e6fa7f49',
			'label' => 'URL 2',
			'name' => 'url2',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a5271a09d183',
			'label' => 'URL 3',
			'name' => 'url3',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a5271a09d182',
			'label' => 'URL 4',
			'name' => 'url4',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719f9d181',
			'label' => 'URL 5',
			'name' => 'url5',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719f9d180',
			'label' => 'URL 6',
			'name' => 'url6',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719f9d17f',
			'label' => 'URL 7',
			'name' => 'url7',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719f9d17e',
			'label' => 'URL 8',
			'name' => 'url8',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719e9d17d',
			'label' => 'URL 9',
			'name' => 'url9',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719e9d17c',
			'label' => 'URL 10',
			'name' => 'url10',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719e9d17b',
			'label' => 'URL 11',
			'name' => 'url11',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719d9d17a',
			'label' => 'URL 12',
			'name' => 'url12',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a52719d9d179',
			'label' => 'URL 13',
			'name' => 'url13',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a5271e12be3a',
			'label' => 'URL 14',
			'name' => 'url14',
			'type' => 'page_link',

			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a5271e02be39',
			'label' => 'URL 15',
			'name' => 'url15',
			'type' => 'page_link',
			'required' => 0,
			'conditional_logic' => 0,
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '24',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'active' => 1,
	'description' => '',
));

endif;

?>