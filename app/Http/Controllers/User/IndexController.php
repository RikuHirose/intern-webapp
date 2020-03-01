<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;

class IndexController extends Controller
{

    public function index()
    {
        // 一旦dbの中にある全てのjobsを取得する
        $jobs = Job::all();
        // relationをload
        $jobs->load('company', 'occupations', 'skills');

        // metaタグ
        \SeoHelper::setIndexSeo();

        return view('pages.index', [
            'jobs' => $jobs,
        ]);
    }
}
