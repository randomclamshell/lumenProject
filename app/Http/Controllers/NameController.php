<?php

//
namespace App\Http\Controllers;

//use the name model at the app root file
use App\Name;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class NameController extends Controller
{

    //for the index function, this just says the data var is equal to everything in the Name model and to get it all

        public function index() 
        {
           $data = Name::all();
                return response()->json($data);  
        }
    
    //for the show function, since we are searching with an id, we will put $id for the argument. (the id being the argument)

        public function getOne($id) 
        {
            $data = Name::where('id', $id)->first();
            return response()->json($data);
        }


        public function getMany(Request $request, $id){

            $data = Name ::where('id', $id)->get();
            return response()->json($data);
        }

//to store, we create a new model, and set it to newName. 
        public function store(Request $request) 
        {
            $newName = new Name;
            $newName->name= $request->name;
            $newName->save();
            return response()->json($newName);
        }


        public function update(Request $request, $id) 
        {
         $data = Name::where('id', $id)->first();
         $data->name = $request->input('name');
         $data->save(); 
         return response()->json($data);

        }


        public function destroy(Request $request, $id) 
        {
            $data = Name::where('id', $id)->first();
            $data->delete();
            return response()->json('name deleted successfully');
        }

        
        
}

