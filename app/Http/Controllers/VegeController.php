<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vege;


class VegeController extends Controller
{
    public function all(){
        //get all the vegetables
        $veges=vege::all();
        //print out variable and stop execution
        //dd($veges);
        //show the view
        //passing the data to the view
        return view('veges.all',[
        'veges' => $veges
        ]);
                
    }
    public function add(){
        return view('veges.add');
    }
    public function save(Request $request){

             $validated = $request->validate([
                'vege_name' => 'required|alpha',
                'price' => 'required|decimal',
                

    ]);

             // inputs are ok
             $vege= new vege();
             $vege->name= $request->get('vege_name');
             $vege->price= $request->get('price');
             $vege->save();

             return redirect  ('veges');

    // The blog post is valid...

            //dd('here');
        }

        public function delete( $id){
                vege::find($id)->delete();
                 return redirect  ('veges');
        }

        

        public function edit($id){
                $veges = Vege::findOrFail($id);
                 return view('veges.update',compact('vege'))
                 ->with('vege', $vege);
        }
         public function update(Request $request, $id){

             $validatedData = $request->validate([
                'name' => 'required|alpha',
                'price' => 'required|decimal',
                
                    ]);
             Vege::wherevegeId($id)->update($validatedData);

                 return redirect('veges')->with ('success', 'Veges successfully updated');
}
}

