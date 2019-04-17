<?php
/**
*
* @package phpBB Extension - martin externallinkinnewwindow
* @copyright (c) 2018 Martin ( https://github.com/Mar-tin-G )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_EXTLINKNEWWIN_SELECT'			=> 'Open externe links in een nieuw venster',
	'UCP_EXTLINKNEWWIN_SELECT_EXPLAIN'	=> '<strong>Gebruik forum standaard</strong>: Gebruik het standaardgedrag dat de beheerder heeft gedefinieerd.<br><strong>Open altijd een nieuw venster</strong>: Externe links worden altijd in een nieuw venster geopend.<br><strong>Open nooit een nieuw venster</strong>: Externe links worden altijd in hetzelfde venster geopend.',
	'UCP_EXTLINKNEWWIN_OPTION_0' 		=> 'Gebruik forum standaard' ,
	'UCP_EXTLINKNEWWIN_OPTION_1' 		=> 'Open altijd een nieuw venster',
	'UCP_EXTLINKNEWWIN_OPTION_2' 		=> 'Open nooit een nieuw venster',
));
