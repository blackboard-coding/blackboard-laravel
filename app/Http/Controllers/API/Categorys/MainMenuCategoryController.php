<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MainMenuCategory;

class MainMenuCategoryController extends Controller
{
    // get all 
    public function index() {
        $results = MainMenuCategory::all();
        return response()->json(['total' => count($results), 'version' => "20200212235959",'results' => $results ],200);
    }

    // get point
    public function show( MainMenuCategory $id) {
        return $id;
    }

    // create data
    public function create(Request $request)
    {
        $mainMenuCategory = MainMenuCategory::create($request->all());

        return response()->json($mainMenuCategory);
    }

    // upate data 
    public function update(Request $request, MainMenuCategory $id)
    {
        $id->update($request->all());

        return response()->json($id);
    }

    // delete data 
    public function delete( MainMenuCategory $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
