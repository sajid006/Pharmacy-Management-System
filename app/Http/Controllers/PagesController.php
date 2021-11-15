<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
    	return view('welcome');
    }
    public function showtables()
    {
    	return view('showtables');
    }
    public function index()
    {
    	return view('index');
    }
    public function contact()
    {
    	return view('contact');
    }
     public function insert()
    {
    	return view('insert');
    }
    public function insertpharmacy()
    {
    	return view('insertpharmacy');
    }
    public function insertemployee()
    {
    	return view('insertemployee');
    }
    public function insertdrugmanu()
    {
    	return view('insertdrugmanu');
    }
    public function insertdrug()
    {
    	return view('insertdrug');
    }
    public function insertdoctor()
    {
    	return view('insertdoctor');
    }
    public function insertpatient()
    {
    	return view('insertpatient');
    }
    public function modifydata()
    {
    	return view('modifydata');
    }
    public function modifytable()
    {
    	return view('modifytable');
    }
    public function columndrop()
    {
    	return view('columndrop');
    }
    public function columnrename()
    {
    	return view('columnrename');
    }
    public function columnmodify()
    {
    	return view('columnmodify');
    }
    public function datadelete()
    {
    	return view('datadelete');
    }
    public function dataupdate()
    {
    	return view('dataupdate');
    }

}
