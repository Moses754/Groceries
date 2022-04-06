<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function all(){
        return view('roles.all');
    }

    public function add(){
        return view('roles.add');
    }
    public function save(Request $request){
        $validated = $request->validate([
                'role_name' => 'required|alpha',
                'role_desc' => 'required|alpha',
                
    ]);
             $roles= new role();
             $roles->name= $request->get('role_name');
             $roles->desc= $request->get('role_desc');
             $roles->save();

             return redirect  ('roles');


    }

     public function delete( $id){
                role::find($id)->delete();
                 return redirect  ('roles');
        }

         public function edit($id){
                $role = Role::findOrFail($id);
                 return view('roles.update',compact('role'))
                 ->with('role', $role);
        }
         public function update(Request $request, $id){

             $validatedData = $request->validate([
                'name' => 'required|alpha',
                'desc' => 'required|alpha',

                
                    ]);
             role::whereroleId($id)->update($validatedData);

                 return redirect('roles')->with ('success', 'role successfully updated');

}
}
