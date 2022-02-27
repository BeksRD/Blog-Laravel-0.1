<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Services\ImageService;

class ImageController extends Controller
{
    private $imageService;
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $image = $this->imageService->all();
        return view('homepage',['images'=>$image]);
    }
    public function addPhoto() {
        return view('add_photo');
    }

    function showOne($id){
        $image = $this->imageService->one($id);
        return view('show',['image'=>$image]);
    }
    public function edit($id){
        $image = $this->imageService->one($id);

        return view('edit',[
            'image'=>$image
        ]);
    }
    public function update($id, Request $request){
        $image = $request->file('image');
        $this->imageService->update($id,$image);
        return redirect('/');
    }
    public function stored(Request $request){
        $image = $request->file('image');
        $this->imageService->save($image);
        return redirect('/');
    }
    public function delete($id){
        $this->imageService->delete($id);
        return redirect('/');
    }
}
