<?php

namespace Textil\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use function time;

//use Validator;

// use Illuminate\Contracts\Validation\Validator;

//use Intervention\Image\Facades\Image;

class ImageController extends Controller
{

    public function index()
    {
        return view('spoon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {

        $this->validate($request, [
//        'title' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000000'
        ]);

        $image = $request->file('image');
        $input['imagename'] = time()."-".$image->getClientOriginalExtension();

//        $size = Storage::size;

        $destinationPath = public_path('images/thumbnailcamisa');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('images/uploadcamisa');
        $image->move($destinationPath, $input['imagename']);

//        $this->postImage->add($input);

        return back()
            ->with('success', 'Imagem enviada com sucesso!!')
            ->with('imageName', $input['imagename']);
    }
}
