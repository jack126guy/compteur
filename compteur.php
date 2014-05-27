<?php
function comptez() {
	require('compteur-config.php');
	echo $compteur['format']['before'];
	foreach($compteur['accounts'] as $accountrow) {
		printf($compteur['format']['item'], $accountrow['name'], $accountrow['url'], $accountrow['info'], $accountrow['image']);
	}
	echo $compteur['format']['after'];
}
?>