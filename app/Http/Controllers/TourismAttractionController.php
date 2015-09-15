<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
/**
* Show the tourism facilities page.
*
*/
class TourismAttractionController extends Controller
{
	
	function view()
	{
		// return View::make('/tourism/attraction/tourism-attraction',array('pageTitle'=>'Tourism Attraction'));
		return View::make('/errors/503');
	}
}