<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Study_Abroad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudyAbroadController extends Controller
{
    public function index()
    {
        $jobs = DB::table('study_abroad')->select('address', 'company', 'salary', 'job')->get();
        return view('client.pages.content', ['jobs' => $jobs]);
    }
}