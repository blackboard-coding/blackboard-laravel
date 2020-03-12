<?php

namespace App\Http\Controllers\API\Videos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchVideoController extends Controller
{
     // get all 
     public function index() {
        $results = ListVideoInCategory::all();
        $obj->total = count($results);
        $obj->limit = 10;
        $obj->offset = 0;
        
        return response()->json(['pagination' => $obj,'results' => $results ],200);
    }

    // get point
    public function show( ListVideoInCategory $cat, $pp, $offset) {
        return [$cat, $pp, $offset];
    }

    // create data
    public function create(Request $request)
    {
        $listVideoInCategory = ListVideoInCategory::create($request->all());

        return response()->json($listVideoInCategory);
    }

    // upate data 
    public function update(Request $request, ListVideoInCategory $cat)
    {
        $cat->update($request->all());

        return response()->json($cat);
    }

    // delete data 
    public function delete( ListVideoInCategory $cat)
    {
        $cat->delete();

        return response()->json(null, 204);
    }
}
