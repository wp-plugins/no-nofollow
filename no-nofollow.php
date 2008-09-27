<?php
/*
Plugin Name: no-nofollow
Plugin URI: http://it-serie.de/plugin/no-nofollow
Description: Removes the relation=nofollow attribute for links. Needs no configuration.
Version: 0.8.15
Author: hgn
Author URI: http://it-serie.de/
*/

/*  Copyright 2008 hagen Edlich  (email : hagen@edlich.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Filters

add_filter('get_comment_author_link', 'filter_its_nonofollow');				// for comment author links and pingback URL
add_filter('comment_text', 'filter_its_nonofollow');						// for links in the comment text

function filter_its_nonofollow($nonofollow)									// Replace 
{
	$nonofollow = str_replace(" rel='external nofollow'>","rel='external'>", $nonofollow);
	$nonofollow = str_replace(" rel='nofollow'>",">", $nonofollow);
	$nonofollow = str_replace(" rel=\"external nofollow\">","rel=\"external\">", $nonofollow);
	$nonofollow = str_replace(" rel=\"nofollow\">",">", $nonofollow);
	return $nonofollow;
}

// This plugin has no Options Page, no regular expressions, no IF... ...ELSE ..., it should be very fast ;-)
