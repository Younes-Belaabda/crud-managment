<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuilderShowTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request , $tablename)
    {
        $show_table_builder = new \App\TableBuilder\ShowTableBuilder($tablename);
        $columns = $show_table_builder->get_columns();
        return view('builder-tables.table' , ['columns' => $columns]);
    }
}
