<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $result = Categories::paginate();

        return response()->json($result);
    }

    public function store(Request $request)
    {
        $result = Categories::create($request->all());
        return response()->json($result);
    }

    public function show($id)
    {
        $result = Categories::findOrFail($id);
        return response()->json($result);
    }

    public function update(Request $request, $id)
    {
        $result = Categories::findOrFail($id);
        $result->update($request->all());
        return response()->json($result);
    }

    public function destroy($id)
    {
        $result = Categories::findOrFail($id);
        $result->delete();
        return response()->json($result);
    }
}
