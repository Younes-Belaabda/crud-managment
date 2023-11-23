<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BuilderTablesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {

    // }

    public function test_creation_of_object(){
        $createTableBuilder = new \App\TableBuilder\CreateTableBuilder('students');
        $this->assertTrue($createTableBuilder->get_tablename() == 'students');
    }

    public function test_build_creation_command(){
        $createTableBuilder = new \App\TableBuilder\CreateTableBuilder('students');
        $createTableBuilder->set_attributes([
            ['name' => 'name'  , 'type' => 'string' , 'config' => [
                'default' => 'myname',
                'nullable' => true
            ]],
            ['name' => 'image' , 'type' => 'string' ],
            ['name' => 'age'   , 'type' => 'integer'],
        ]);
        $this->assertTrue($createTableBuilder->build());
    }
}
