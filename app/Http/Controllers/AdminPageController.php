<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index() {
    	return view('admin/index');
	}
	public function patient() {
		return view('admin/patient');
	}
	public function event() {
		return view('admin/event');
	}
	public function record() {
		return view('admin/record');
	}
	public function user() {
		return view('admin/user');
	}
	//REPORTS 
	public function monthly() {
		return view('admin/reports/monthly');
	}
	public function quarterly() {
		return view('admin/reports/quarterly');
	}
	public function annually() {
		return view('admin/reports/annually');
	}
}
