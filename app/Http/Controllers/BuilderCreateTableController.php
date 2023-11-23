<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilderCreateTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tablename = $request->tablename;
        $attributes = $request->input('attributes');
        $create_table_builder = new \App\TableBuilder\CreateTableBuilder($tablename);
        $create_table_builder->set_attributes($attributes);
        $create_table_builder->build();
        return back()->with('create' , 'we create table : ' . $tablename . ' for you .');
    }
}
