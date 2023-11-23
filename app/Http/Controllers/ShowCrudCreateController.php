<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCrudCreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request , $tablename)
    {
        $columns = \App\TableBuilder\TableBuilder::get_table_columns($tablename);
        return view('crud.create' , ['tablename' => $tablename , 'columns' => $columns]);
    }
}
