<?php
    namespace App\Services;

    use App\Models\Tag;

class TagService{

    public function create($validated){
        Tag::create($validated);
    }

    public function update($validated, $id){
        $tag = Tag::find($id);
        $tag->name = $validated['name'];
        $tag->save();
    }
}
