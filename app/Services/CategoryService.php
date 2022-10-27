<?php
namespace App\Services;

use App\Models\Category;

class CategoryService{

    public function create($validated){
        Category::create($validated);
    }

    public function update($validated, $id){
        $category = Category::find($id);
        $category->name = $validated['name'];
        $category->save();
    }
}
