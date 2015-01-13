<?php 
return [
	'title' => '商品',
    'single' => '商品',
    'model' => 'Good',

    'columns' => [
    	'id' => [
    		'title' => 'ID',
    	],
    	'name' => [
    		'title' => '品名',
    	],
    ],
    'edit_fields' => [
		'name' => [
    		'title' => '品名',
    		'type' => 'text',
    	],
    ],
];
 ?>