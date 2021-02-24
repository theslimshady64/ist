<?php

namespace App\Http\Controllers;

use App\Services\Test;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function import(Request $request, Test $test)
    {
        return view('export', [
            'currency' => $test->import($request)
        ]);
    }

    public function export(Request $request, Test $test)
    {
        return $test->export($request);
    }
}
