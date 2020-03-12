<?php

namespace App\Http\Controllers\API\Videos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListVideoByCategoryController extends Controller
{
        // get all 
        public function index() {
            $results = ListAllCategory::all();
            return response()->json(['total' => count($results),'results' => $results ],200);
        }
    
        // get point
        public function show( ListAllCategory $id) {
            return $id;
        }
    
        // create data
        public function create(Request $request)
        {
            $listAllCategory = ListAllCategory::create($request->all());
    
            return response()->json($listAllCategory);
        }
    
        // upate data 
        public function update(Request $request, ListAllCategory $id)
        {
            $id->update($request->all());
    
            return response()->json($id);
        }
    
        // delete data 
        public function delete( ListAllCategory $id)
        {
            $id->delete();
    
            return response()->json(null, 204);
        }
}
