<?php

    namespace App\TableBuilder;

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class ShowTableBuilder implements Builder {

        protected string $table_name;
        protected array $columns;
        protected array $hidden = ['id' , 'created_at' , 'updated_at'];

        public function __construct($table_name){
            $this->table_name = $table_name;
            $this->columns = \DB::select("SHOW COLUMNS FROM $this->table_name");
        }

        public function get_tablename(){
            return $this->table_name;
        }

        public function get_columns(){
            $columns = [];
            foreach($this->columns as $column){
                $columns[] = [
                    'name' => $column->Field
                ];
            }
            return collect($columns)->filter(function($key , $val){
                return !in_array($key['name'] , $this->hidden);
            });
        }

        public function build(){
            return true;
        }
    }
