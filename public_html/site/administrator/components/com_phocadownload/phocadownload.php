<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die;
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if (!JFactory::getUser()->authorise('core.manage', 'com_phocadownload')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
if (! class_exists('PhocaDownloadLoader')) {
    require_once( JPATH_ADMINISTRATOR.DS.'components/com_phocadownload/libraries/loader.php');
}

require_once( JPATH_COMPONENT.DS.'controller.php' );
jimport( 'joomla.filesystem.folder' ); 
jimport( 'joomla.filesystem.file' );
phocadownloadimport('phocadownload.path.path');
phocadownloadimport('phocadownload.utils.utils');
phocadownloadimport('phocadownload.utils.settings');
phocadownloadimport('phocadownload.utils.exception');
phocadownloadimport('phocadownload.render.renderadmin');
phocadownloadimport('phocadownload.render.renderadminview');
phocadownloadimport('phocadownload.render.renderadminviews');
phocadownloadimport('phocadownload.html.category');
phocadownloadimport('phocadownload.html.jgrid');
phocadownloadimport('phocadownload.html.batch');
phocadownloadimport('phocadownload.file.file');
phocadownloadimport('phocadownload.file.fileupload');
phocadownloadimport('phocadownload.file.fileuploadmultiple');
phocadownloadimport('phocadownload.file.fileuploadsingle');
phocadownloadimport('phocadownload.category.category');
phocadownloadimport('phocadownload.tag.tag');

jimport('joomla.application.component.controller');
$controller	= JControllerLegacy::getInstance('PhocaDownloadCp');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
?>