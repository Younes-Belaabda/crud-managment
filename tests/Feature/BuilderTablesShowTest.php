<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BuilderTablesShowTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_get_table_name(): void
    {

        $builderShowTable = new \App\TableBuilder\ShowTableBuilder('users');
        $this->assertTrue($builderShowTable->get_tablename() == 'users');
    }

    public function test_get_table_columns(): void
    {

        $builderShowTable = new \App\TableBuilder\ShowTableBuilder('users');
        $this->assertTrue(is_array($builderShowTable->get_columns()));
    }
}
