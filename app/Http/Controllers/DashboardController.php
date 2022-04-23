<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() 
    {
    	echo "Saya Halaman Dashboard";
    	echo "<h1> Ini adalah koding kedua pada Dashboard </h1>";
    	echo "<p> harapannya ini akan tercatat pada koding kedua saya </p>";
    }
}
