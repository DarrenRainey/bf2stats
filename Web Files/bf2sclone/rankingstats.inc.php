<?php

function getRankingCollection()
{
	$i = 0;
	$full[$i]['name'] = 'Captures';
	$full[$i]['data'] = getTopCaptures();
	$i++;
	$full[$i]['name'] = 'Relative Command Score';
	$full[$i]['data'] = getTopCMD();	
	$i++;
	$full[$i]['name'] = 'Command Score';
	$full[$i]['data'] = getTopCMDScore();
	$i++;
	$full[$i]['name'] = 'Best Round Score';
	$full[$i]['data'] = getTopRndScore();
	$i++;
	$full[$i]['name'] = 'Flag work (Defend, Capture, etc...)';
	$full[$i]['data'] = getTopFlagwork();
	$i++;
	$full[$i]['name'] = 'Kill/Death Ratio<br>(minimum 1 death)';
	$full[$i]['data'] = getTopKDR();
	$i++;
	$full[$i]['name'] = 'Top Killer';
	$full[$i]['data'] = getTopKills();
	$i++;
	$full[$i]['name'] = 'Best Medic (revives, heals)';
	$full[$i]['data'] = getTopSani();
	$i++;
	$full[$i]['name'] = 'Score';
	$full[$i]['data'] = getTopScore();
	$i++;
	$full[$i]['name'] = 'Score Per Minute';
	$full[$i]['data'] = getTopSPM();
	$i++;
	$full[$i]['name'] = 'Best Teamworkers';
	$full[$i]['data'] = getTopTeamwork();
	$i++;
	$full[$i]['name'] = 'Win/Loss Ratio<br>(minimum 1 loss)';
	$full[$i]['data'] = getTopWLR();
	return $full;	
}

function getTopTen()
{
	include('./queries/getTopTen.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx] = $row;
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopCaptures()
{
	include('./queries/getRankingTopCaptures.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['captures'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopCMD()
{
	include('./queries/getRankingTopCMD.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['cmd'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopCMDScore()
{
	include('./queries/getRankingTopCmdScore.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['cmdscore'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopRndScore()
{
	include('./queries/getRankingTopRndScore.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['rndscore'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopFlagwork()
{
	include('./queries/getRankingTopFlagwork.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['flagwork'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopKDR()
{
	include('./queries/getRankingTopKDR.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['kdr'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopSani()
{
	include('./queries/getRankingTopSani.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['sani'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopWLR()
{
	include('./queries/getRankingTopWLR.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['wlr'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopSPM()
{
	include('./queries/getRankingTopSPM.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['spm'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopScore()
{
	include('./queries/getRankingTopScore.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['score'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopKills()
{
	include('./queries/getRankingTopKills.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['kills'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

function getTopTeamwork()
{
	include('./queries/getRankingTopTeamwork.php'); // imports the correct sql statement
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());	
	$data = array();
	
	$idx = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$data[$idx]['id'] = $row['id'];
		$data[$idx]['name'] = $row['name'];
		$data[$idx]['rank'] = $row['rank'];
		$data[$idx]['value'] = $row['teamwork'];
		$data[$idx]['country'] = $row['country'];
		$idx++;
	}	 	
	mysql_free_result($result);
	return $data;
}

?>