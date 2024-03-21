<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Test::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Test::create($request->all())){
            return response('Test created', 201);
        } else {
            return response('Test not created', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $test)
    {
        $test = Test::find($test);
        if ($test) {
            return $test;
        }

        return response('Test not found', 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $test)
    {
        $test = Test::find($test);
        if ($test) {
            $test->update($request->all());
            return response('Test updated', 200);
        }

        return response('Test not found', 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $test)
    {
        $test = Test::find($test);
        if ($test) {
            $test->delete();
            return response('Test deleted', 200);
        }

        return response('Test not found', 404);
    }
}
