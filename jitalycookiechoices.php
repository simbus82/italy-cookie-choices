<?php
/**
 * @package    Joomla
 * @subpackage Plugins
 * @license    GNU/GPL
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
 
/**
 * @package    Joomla
 * @subpackage Plugins
 * @license    GNU/GPL
 */
class plgSystemJitalycookiechoices extends JPlugin
{
	public $_app;
	
	public function __construct(&$subject, $config) {
		$this->_app = JFactory::getApplication();
        $this->_doc = JFactory::getDocument();
        $config = JFactory::getConfig();
        parent::__construct($subject, $config);
	}
	/**
	* Load the language file on instantiation. Note this is only available in Joomla 3.1 and higher.
	* @var    boolean
	* @since  3.1
	*/
	protected $autoloadLanguage = true;
	
	private function _setMessage() {
        $msg = '<div class="plg_system_jitalycookiechoices_message">';
        $msg.= '<p>'.JText::_('PLG_SYS_JITALYCOOKIECHOICES_MESSAGE').'</p>';
        $msg.= '</div>';
        return $msg;
    }
    
    private function _requestAccept() {
        if(JFactory::getUser()->id) return true;
        $msg = $this->_setMessage();
        $this->_app->enqueueMessage($msg, $this->params->get('messagetype','message'));
    }
}
?>
