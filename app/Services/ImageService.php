<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImageService
{
    private $table_name;
    private $upload_folder;
    public function __construct(string $table_name = 'image', string $upload_folder = 'images')
    {
        $this->table_name = $table_name;
        $this->upload_folder = $upload_folder;
    }

    public function all(){
         return DB::table($this->table_name)
            ->select('*')
            ->get();
    }
    public function one($id){
         return DB::table($this->table_name)
            ->where('id',$id)
            ->first();
    }
    public function update($id, $image_obj){
        $image = $this->one($id);
        File::delete($image->image);
        $image = $image_obj->store($this->upload_folder);
        return DB::table($this->table_name)
            ->where('id', $id)
            ->update(['image' => $image]);
    }
    public function save($image_obj){
        $image = $image_obj->store($this->upload_folder);
        return DB::table('image')->insert(['image'=>$image]);
    }
    public function delete($id){
        $image = $this->one($id);
        File::delete($image->image);
        return DB::table($this->table_name)->where('id',$id)->delete();
    }

}
