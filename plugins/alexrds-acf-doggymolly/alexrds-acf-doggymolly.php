<?php

/**
* Plugin Name: Doggy Molly ACF Plugin
* Description: Aquí van todas las funciones ACF.
* Author: alex rodríguez santibáñez
* Version: 1.5
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
					'key' => 'field_5a3939bcfd690',
					'label' => 'Page - Link',
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

?>