<?php

namespace TrezeVel\Category\Testing;

use TrezeVel\Category\Models\Category;

/**
* Teste de categorias
*/
class AdminCategoriesTest extends \TestCase
{
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
}
