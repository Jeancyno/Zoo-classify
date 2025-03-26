<?php 
function base_path(string $path) : string {
	return ROOT . DIRECTORY_SEPARATOR . $path;
}
function includes_path(string $path, string $ext = '.php') : string {
	return base_path('includes' . DIRECTORY_SEPARATOR . $path . $ext);
}
function assets_path(string $path) : string {
	return base_path('assets' . DIRECTORY_SEPARATOR . $path);
}
function assets(string $path) : string {
	return url('assets/' . $path);
}
function url(?string $path = null) : string {
	return 'http://'. $_SERVER['HTTP_HOST'] . ($path === null ? '' : '/' . trim($path, '/'));
}
function datas() {
	exec(CLI_PY . ' all', $val);
	return json_decode(implode("\n", $val));
}
function all_characteristic() {
	exec(CLI_PY . ' all.rel.characteristic', $val);
	return !empty($d = json_decode(implode("\n", $val), true)) ? $d : [];
}
function show_property(int| string $id) {
	exec(CLI_PY . ' show.property ' . $id, $val);
	return !empty($d = json_decode(implode("\n", $val), true)) ? $d : [];
}