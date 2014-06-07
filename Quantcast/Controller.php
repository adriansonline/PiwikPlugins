<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\Quantcast;

use Exception;
use Piwik\Piwik;

/**
 *
 
 
 */
class Controller extends \Piwik\Plugin\Controller
{
    
	public function Quantcast()
	{
	
	
	  if ($_SERVER['SERVER_NAME'] == 'localhost')
	  {
	 echo '<h1>Demo Data for Local Host</h1>';
	 $dataurl= "com.linkedin";
	 $durl= "Sample Data using LinkedIn";
	 }
else
  {
  
  //Get the url for Quantcast data
  $durl= $this->site->getMainUrl();//change url here
  $domainurl= implode("/",array_slice(explode("/",$durl,4),0,3));
  list($start,$domain,$tld) = explode(".", $domainurl);
  $dataurl = $tld.'.'.$domain; 
}

 echo'<center><h4 style="margin-bottom: 0; padding-bottom: 0;">Quantification of '.$durl.' </h4>';
 echo '<h5 style="margin-bottom: 0; padding-bottom: 0;"><a href="http://www.quantcast.com/">Learn more about Quantcast</a><h5>';
 echo '<HR  align="left" ><h4 style="margin-bottom: 0; padding-bottom: 0;">Gender</h3><iframe marginwidth="0px" marginheight="0px" scrolling="no" frameborder="0" height="80" width="250"  src="http://www.quantcast.com/profile/embed?img=http%3A//www.quantcast.com/profile/demographicGraph%3Fwunit%3Dwd%253A'.$dataurl.'%26demo%3Dgender&w=250&h=80&showDeleteButtons=false&wunit=Charts.Summary.Demographics.GENDER.56eJX7AMvZl_M"></iframe></p>';
 echo '<HR  align="left" ><h4 style="margin-bottom: 0; padding-bottom: 0;">Age</h3><iframe marginwidth="0px" marginheight="0px" scrolling="no" frameborder="0" height="155" width="250"  src="http://www.quantcast.com/profile/embed?img=http%3A//www.quantcast.com/profile/demographicGraph%3Fwunit%3Dwd%253A'.$dataurl.'%26demo%3Dage&w=250&h=155&showDeleteButtons=false&wunit=Charts.Summary.Demographics.AGE.56eJX7AMvZl_M"></iframe></p>';
 echo '<HR  align="left" ><h4 style="margin-bottom: 0; padding-bottom: 0;">Ethnicity</h3><iframe marginwidth="0px" marginheight="0px" scrolling="no" frameborder="0" height="125" width="250"  src="http://www.quantcast.com/profile/embed?img=http%3A//www.quantcast.com/profile/demographicGraph%3Fwunit%3Dwd%253A'.$dataurl.'%26demo%3Dethnicity&w=250&h=125&showDeleteButtons=false&wunit=Charts.Summary.Demographics.ETHNICITY.56eJX7AMvZl_M"></iframe></p>';
 echo '<HR  align="left" ><h4 style="margin-bottom: 0; padding-bottom: 0;">Children</h3><iframe marginwidth="0px" marginheight="0px" scrolling="no" frameborder="0" height="80" width="250"  src="http://www.quantcast.com/profile/embed?img=http%3A//www.quantcast.com/profile/demographicGraph%3Fwunit%3Dwd%253A'.$dataurl.'%26demo%3Dchildren&w=250&h=80&showDeleteButtons=false&wunit=Charts.Summary.Demographics.CHILDREN.56eJX7AMvZl_M"></iframe></p>';
 echo '<HR  align="left" ><h4 style="margin-bottom: 0; padding-bottom: 0;">Income</h3><iframe marginwidth="0px" marginheight="0px" scrolling="no" frameborder="0" height="110" width="250"  src="http://www.quantcast.com/profile/embed?img=http%3A//www.quantcast.com/profile/demographicGraph%3Fwunit%3Dwd%253A'.$dataurl.'%26demo%3Dincome&w=250&h=110&showDeleteButtons=false&wunit=Charts.Summary.Demographics.INCOME.56eJX7AMvZl_M"></iframe></p>';
 echo '<HR  align="left" ><h4 style="margin-bottom: 0; padding-bottom: 0;">Education</h3><iframe marginwidth="0px" marginheight="0px" scrolling="no" frameborder="0" height="95" width="250"  src="http://www.quantcast.com/profile/embed?img=http%3A//www.quantcast.com/profile/demographicGraph%3Fwunit%3Dwd%253A'.$dataurl.'%26demo%3Deducation&w=250&h=95&showDeleteButtons=false&wunit=Charts.Summary.Demographics.EDUCATION.56eJX7AMvZl_M"></iframe></p>';
 echo '<p>No data? <a href="https://www.quantcast.com/user/signup">Get quantified!</a></p></center>';
	
	  
}	
    /**
     * @param \Exception $e
     */
    protected function error($e)
    {
        return '<div class="pk-emptyDataTable">'
            . Piwik::translate('General_ErrorRequest')
            . ' - ' . $e->getMessage() . '</div>';
    }
}
