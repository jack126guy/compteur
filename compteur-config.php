<?php
//Formatting options
$compteur['format'] = array(

	//Code before the account items (probably an HTML start tag)
	'before' => '<ul class="compteur">',

	/* Format for each item.
	 Placeholders:
	  %1$s - Site name
	  %2$s - Account URL
	  %3$s - Account name/info
	  %4$s - Image
	*/
	'item' => '<li><a href="%2$s"><img src="%4$s" alt="%1$s" title="%1$s" class="compteur-image"/><div class="compteur-info">%3$s</div></a></li>',

	//Code after the account items (probably an HTML end tag)
	'after' => '</ul>'
);

//Accounts

/* For each account, copy the following format and fill in the information

$compteur['accounts'][] = array(
 'name' => 'Example Site',
 'url' => 'http://example.com/me',
 'info' => '/me',
 'image' => 'logo.png'
);

*/
/* Add the acounts below this line */


/* Add the acounts above this line */
?>