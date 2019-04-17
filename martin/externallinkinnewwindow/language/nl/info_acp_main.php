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
	'ACP_EXTLINKNEWWIN_TITLE'			=> 'Externe link in nieuw venster',
	'ACP_EXTLINKNEWWIN_SETTINGS'		=> 'Instellingen',
	'ACP_EXTLINKNEWWIN_SETTINGS_SAVED'	=> 'Instellingen zijn succesvol opgeslagen!',
	'ACP_EXTLINKNEWWIN_UCP'				=> 'Toon voorkeuren in Gebruikerspaneel',
	'ACP_EXTLINKNEWWIN_UCP_EXPLAIN'		=> 'Schakel de voorkeuren ’Externe links openen in nieuw venster’ in Gebruikerspaneel in (onder Forumvoorkeuren, Wijzig algemene instellingen), zodat gebruikers het gedrag op externe links kunnen beheren.',
	'ACP_EXTLINKNEWWIN_USER'			=> 'Open externe links in een nieuw venster voor gebruikers',
	'ACP_EXTLINKNEWWIN_USER_EXPLAIN'	=> 'Als ’Toon voorkeuren in Gebruikerspaneel’ is ingesteld op <strong>Nee</strong>, bepaalt deze optie of externe links in nieuwe vensters worden geopend voor geregistreerde gebruikers.<br>Als ’Toon voorkeuren in Gebruikerspaneel’ is ingesteld op <strong>Ja</strong>, dan definieert deze optie het standaardgedrag dat wordt gebruikt als de gebruiker de voorkeur in de het Gebruikerspaneel niet wijzigt.',
	'ACP_EXTLINKNEWWIN_GUESTS'			=> 'Open externe links in een nieuw venster voor gasten',
	'ACP_EXTLINKNEWWIN_GUESTS_EXPLAIN'	=> 'Bepaalt of externe links in nieuwe vensters voor gasten worden geopend.',
	'ACP_EXTLINKNEWWIN_BOTS'			=> 'Open externe links in een nieuw venster voor bots',
	'ACP_EXTLINKNEWWIN_BOTS_EXPLAIN'	=> 'Bepaalt of externe links in nieuwe vensters worden geopend voor bots.',
	'ACP_EXTLINKNEWWIN_ADDREF'			=> 'Voeg <i>rel="nofollow"</i> attribuut toe',
	'ACP_EXTLINKNEWWIN_ADDREF_EXPLAIN'	=> 'Indien ingeschakeld, wordt het attribuut ’rel="nofollow"’ toegevoegd aan alle externe links die door deze extensie zijn gewijzigd om in een nieuw venster te openen.',
));
