<?php

namespace App\Controller;

use App\Engine\Response;
use App\Engine\View;

class ImageController
{
    public function welcome ()
    {
       return View::render('layout');
    }

    public static function uploadImage ()
    {
        $status = false;
        $file = $_FILES['img'];
        $errors = [];

        if (!is_uploaded_file($file['tmp_name'])) {
            $errors['FILE_ERROR'] = 'Any error';
        }

        if ($file['size'] > 10000000) {
            $errors['SIZE_ERROR'] = 'Size is too big :)';
        }

        $extCode = getimagesize( $file['tmp_name'] )[2];

        if(!in_array($extCode, [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF])) {
            $errors['EXT_ERROR'] = 'Extension error, only: PNG, JPEG, GIF';
        }

        $uniq = uniqid();
        $ext = explode('.', $file['name']);

        if(!$errors && move_uploaded_file($file['tmp_name'], 'src/images/'.$uniq.'.'.$ext[1])) {
            $status = true;
        }

        return Response::json(
            [
                'status' => $status,
                'errors' => $errors
            ]
        );
    }

    public static function getImages ()
    {

    }

    public static function deleteImage ()
    {

    }
}