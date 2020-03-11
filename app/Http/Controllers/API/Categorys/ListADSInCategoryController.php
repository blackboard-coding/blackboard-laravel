<?php

namespace App\Http\Controllers\API\Categorys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ListADSInCategory;

class ListADSInCategoryController extends Controller
{
    // get all 
    public function index() {
        $results = ListADSInCategory::all();
        return response()->json(['total' => count($results),'results' => $results ],200);
    }

    // get point
    public function show( ListADSInCategory $id) {
        return $id;
    }

    // create data
    public function create(Request $request)
    {
        $listADSInCategory = ListADSInCategory::create($request->all());

        return response()->json($listADSInCategory);
    }

    // upate data 
    public function update(Request $request, ListADSInCategory $id)
    {
        $id->update($request->all());

        return response()->json($id);
    }

    // delete data 
    public function delete( ListADSInCategory $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
