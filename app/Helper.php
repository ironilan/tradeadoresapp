<?php

use App\Models\Config;


function setting()
{
	
	return Config::get()->last();
}