<?php

namespace App\Http\Controllers;

/**
 * 
 */

#Each function has these tasks to perform:
        #process variable data or parameters
		#talk to the model
		#update the DB
		#receive data from model
		#compile or process data from model if needed
		#pass that data to the correct view

class PagesController extends Controller
{
	/*Go to home page*/
	public function getIndex()
	{
		return view('pages/welcome');
	}

	/*Go to About page*/
	public function getAbout()
	{
		$firstName = "Stephan";
		$lastName = "Remane";
		$fullName = $firstName. " " .$lastName;
		$email = 'stephan_blog@blog.com';
		$data = [];
		$data['email'] = $email;
		$data['fullName'] = $fullName;
		return view('pages/about')->withData($data);
	}

	/*Go to contact page*/
	public function getContact()
	{
		return view('pages/contact');
	}

}