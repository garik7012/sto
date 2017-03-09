<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = view('admin.panel.main');
	return AdminSection::view($content, 'Панель администратора');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);
