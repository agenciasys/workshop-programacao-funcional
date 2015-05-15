<?php
require 'base.php';

$setLocation = function($team) {
	$team['location'] = $team['city'] . '/' . $team['state'];
	return $team;
};

$teams = array_map($setLocation, $teams);

echo '<pre>' . print_r($teams, 1) . '</pre>';