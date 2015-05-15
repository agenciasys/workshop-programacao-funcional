<?php
ini_set('display_errors', true);
error_reporting(-1);
require 'base.php';

$getTeamsFromState = function($team, $state) {
	return $team['state'] == $state;
};

$getTeamsFromSP = function($team) use ($getTeamsFromState) {
	return $getTeamsFromState($team, 'SP');
};

$SPLeague = array_filter($teams, $getTeamsFromSP);

echo '<pre>' . print_r($SPLeague, 1) . '</pre>';