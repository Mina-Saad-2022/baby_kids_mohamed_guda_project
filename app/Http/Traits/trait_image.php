<?php


namespace App\Http\Traits;

trait trait_image
{

    private function upload_image($request, $file_name, $path)
    {
        $request->move(public_path('assets/images/avatar_user/' . $path), $file_name);
        return true;
    }

}
