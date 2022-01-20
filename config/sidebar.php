<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
  'menu' => [[
      'icon' => 'fa fa-home',
		'title' => 'Home',
      'url' => 'Home',
		'caret' => true,

	],
      [
		'icon' => 'fa fa-table',
		'title' => 'Users',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'Create',
			'title' => 'Create User'
		],           [
				'url' => 'All',
				'title' => 'All users'

		]]
		]]





         

];
