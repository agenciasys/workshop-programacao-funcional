<?php
require 'base.php';

$getRoster = function($team) use ($players) {
	$players = array_filter($players, function($player) use ($team) {
		return in_array($team['name'], $player['teams']);
	});

	$team['players'] = array_map(function($player) {
		return $player['name'];
	}, $players);
	
	return $team;
};

$rosters = array_map($getRoster, $teams);

echo '<pre>' . print_r($rosters, 1) . '</pre>';