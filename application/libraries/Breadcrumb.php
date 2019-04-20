    <?php
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');
     
    class Breadcrumb
	{
	   private $breadcrumb;

	   private $separator = ' / ';

	   private $domain = 'http://localhost/hrd/';

	   public function build($array)
	   {
	      $breadcrumbs = array_merge(array('Dashboard' => 'dashboard'), $array);

	      $count = 0;
	      $this->breadcrumb .= '
	         <ul id="breadcrumb">';
	      foreach($breadcrumbs as $title => $link) {
	         $this->breadcrumb .= '
	         	<li>
		            <a href="'.$this->domain. ''.$link.'">
		               <span itemprop="title">'.$title.'</span>
		            </a>
	            </li>';
	      }
	      $this->breadcrumb .= '</ul>';
	      return $this->breadcrumb;
	   }
	}