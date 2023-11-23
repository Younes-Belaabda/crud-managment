<?php

    namespace App\TableBuilder;

    class TableBuilder {
        // protected array $hidden = ['id' , 'created_at' , 'updated_at'];

        public static function get_table_columns($tablename){
            $columns = \DB::select("SHOW COLUMNS FROM $tablename");
            $items = [];
            foreach($columns as $column){
                $items[] = [
                    'name' => $column->Field
                ];
            }
            return collect($items)->filter(function($key , $val){
                return !in_array($key['name'] , ['id' , 'created_at' , 'updated_at']);
            });
        }
    }
