<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TecidosController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resizeImage()
    {
        return view('resizeImageTecidos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500000'
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();


        $destinationPath = public_path('/thumbnailcamisa');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/uploadcamisa');
        $image->move($destinationPath, $input['imagename']);

//        $this->postImage->add($input);

        return back()
            ->with('success','Imagem enviada com sucesso!!')
            ->with('imageName',$input['imagename']);
    }

    public function getIndex()
    {
        return view('app.pages.site.main.tecidos');
    }
}
