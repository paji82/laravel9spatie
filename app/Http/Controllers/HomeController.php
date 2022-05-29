<?php

namespace App\Http\Controllers;

use console;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$role = Role::create(['name' => 'admin']);
        //$permission = Permission::create(['name' => 'write posts']);
        //$permission = Permission::create(['name' => 'product-list']);
        //$permission = Permission::create(['name' => 'product-create']);
        //$permission = Permission::create(['name' => 'product-edit']);
        //$permission = Permission::create(['name' => 'product-delete']);
        //$permission = Permission::create(['name' => 'role-delete']);
        //$role = Role::findById(1);
        //$permission = Permission::findById(2);
        //$role->givePermissionTo($permission);
        //$permission->removeRole($role);
        //$users = User::role('writer')->get();
        //$users = User::doesntHave('roles')->get();
        //$users = User::all();
        //dd($users);
        //auth()->user()->givePermissionTo('product-list');
        //auth()->user()->givePermissionTo('product-create');
        //auth()->user()->givePermissionTo('product-edit');
        //auth()->user()->givePermissionTo('product-delete');
        //auth()->user()->givePermissionTo('role-delete');
        //auth()->user()->assignRole('Product Editor');
        //return auth()->user()->permissions;
        //return auth()->user()->getAllPermissions();
        //return auth()->user()->getRoleNames();
        //return user::permission('write posts')->get();
        return view('home');
    }
}
