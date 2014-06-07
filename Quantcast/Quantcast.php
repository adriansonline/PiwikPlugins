<?php


namespace Piwik\Plugins\Quantcast;
use Piwik\WidgetsList;

class Quantcast extends \Piwik\Plugin
{
	/**
	 * Return information about this plugin.
	 *
	 * @see Piwik_Plugin
	 *
	 * @return array
	 */

 public function getListHooksRegistered()
    {
        return array(
            'WidgetsList.addWidgets'          => 'addWidgets'
        );
    }

	 
	  public function addWidgets()
    {
        WidgetsList::add('Visitors','Quantcast Demographics', 'Quantcast','Quantcast');
     }
}