<?php

namespace App\Constants;

class FileInfo
{

    /*
    |--------------------------------------------------------------------------
    | File Information
    |--------------------------------------------------------------------------
    |
    | This class basically contain the path of files and size of images.
    | All information are stored as an array. Developer will be able to access
    | this info as method and property using FileManager class.
    |
    */

    public function fileInfo()
    {
        $data['brand'] = [
            'path'      => 'images/brand',
            'default'   => 'images/brand/brand.svg',
            'size'      => '100x40',
        ];
        $data['profile'] = [
            'path'      => 'images/profile',
            'default'   => 'images/profile/profile.png',
            'size'      => '350x300',
        ];
        return $data;
    }
}