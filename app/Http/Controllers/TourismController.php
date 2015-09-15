<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
/**
* Show the tourism page.
*
*/
class TourismController extends Controller
{
	
	function view()
	{
		return View::make('/tourism/tourism',array('pageTitle'=>'Tourism'));
	}
}