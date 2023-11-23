<?php

    namespace App\TableBuilder;

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTableBuilder implements Builder {

        protected string $table_name;
        protected array $attributes;

        public function __construct($table_name){
            $this->table_name = $table_name;
        }

        public function get_tablename(){
            return $this->table_name;
        }

        public function set_attributes($attributes){
            $this->attributes = $attributes;
        }

        public function get_attributes(){
            return $this->attributes;
        }

        public function build(){
            Schema::create($this->table_name, function (Blueprint $table) {
                $table->id();
                foreach($this->attributes as $attribute){
                    switch($attribute['type']){
                        case 'string':
                            $myattribute = $table->string($attribute['name']);
                            break;
                        case 'integer':
                            $myattribute = $table->integer($attribute['name']);
                            break;
                        case 'boolean':
                            $myattribute = $table->boolean($attribute['name']);
                            break;
                        case 'text':
                            $myattribute = $table->text($attribute['name']);
                            break;
                    }
                }
                $table->timestamps();
            });
            return true;
        }
    }
