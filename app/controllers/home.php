<?php 

class Home extends Controller
{
	public function index($name = '', $second = '')
	{
		echo $name . ' ' . $second;
	}

}