# Compteur

**Attention**: This is old and terrible; don't use it. It's badly written (global state!) and just plain unnecessary (it doesn't save any code over copying and pasting the HTML). If you like the styles, you can use the HTML and CSS on your own page.

----------

Compteur is a simple program for presenting a nicely formatted list of online accounts on a Web page. It can also be used for any gallery of website links.

The latest version is version 1.2.

The word "compteur" (pronounced something like "con-tur") is the French word for a counter (that is, a small object used for counting, or someone who counts). It is related to the word "compte", meaning "account", even though they have somewhat different meanings.

## Installation

Installation can be done on any Web server that has a "recent" version of PHP (almost any version will do).

1. Transfer the files to the server. to the same folder as the page where you want to display the account list. (It is possible to place them in a different folder, but that requires different instructions.)
    * If you're just using Compteur, you only need the files whose names start with "compteur". The rest are needed only if you're sharing your own version.

2. Add your accounts. Edit the accounts section `compteur-config.php` file (it's marked with `//Accounts`). Instructions are included in the file itself.
    * The information fields may need a bit more explanation:

        * *name*: The site name. This shows up when the mouse is rolled over the list item.
        * *url*: The URL to the account. Not surprisingly, this is presented as a link.
        * *info*: Information or identification for the account. This can be a username or part of the account URL.
            * Tip: If the info is too long and not wrapping properly, you can add soft hypens (`&#xad;`) or zero-width spaces (`&#x200b;`) where you want the info to wrap.
        * *image*: An image for the item. This is most likely the logo for the site. (Many websites allow people to use their logos to point to an account on the site. Check the policies for each site before using the logos.)

3. Add the stylesheet to the page where you want the account list. Place this in the `<head>` section:

        <link rel="stylesheet" type="text/css" href="compteur-styles.css" />

4. Add the code to generate the list. Place this where you want the account list to appear:

        <?php include('compteur.php'); comptez(); ?>

## Customization

The appearance of the list can be changed.

* The CSS styles can be changed in `compteur-styles.css`.
* The actual HTML can be changed in `compteur-config.php`. This can be done in the section marked with `//Formatting options`. The file itself has instructions on how to change the HTML.

Notes:

* The code should go after `=>` in the `'...'` section.
* Apostrophes/single quotation marks must be replaced with `\'`.