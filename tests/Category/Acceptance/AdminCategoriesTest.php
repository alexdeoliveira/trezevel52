<?php

namespace TrezeVel\Category\Testing;

use TrezeVel\Category\Models\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
* Teste de categorias
*/
class AdminCategoriesTest extends \TestCase
{
    use DatabaseTransactions;

    public function testCanVisitAdminCategoriesPage()
    {
        $this->visit('/admin/categories')
            ->see('Categories');
    }

    public function testCategoriesList()
    {
        Category::create(['name' => 'Category 1', 'active' => true]);
        Category::create(['name' => 'Category 2', 'active' => true]);
        Category::create(['name' => 'Category 3', 'active' => true]);
        Category::create(['name' => 'Category 4', 'active' => true]);

        $this->visit('/admin/categories')
            ->see('Category 1')
            ->see('Category 2')
            ->see('Category 3')
            ->see('Category 4');
    }

    public function testClickCreateNewCategory()
    {
        $this->visit('/admin/categories')
            ->click('Create Category')
            ->seePageIs('/admin/categories/create')
            ->see('Create Category');
    }

    public function testCreateNewCategory()
    {
        $this->visit('/admin/categories/create')
            ->type('Category test', 'name')
            ->check('active')
            ->press('Create Category')
            ->seePageIs('/admin/categories')
            ->see('Category test');

    }
}
