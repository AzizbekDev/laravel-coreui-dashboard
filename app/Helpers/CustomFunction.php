<?php
use App\Lib\FileManager;

if (!function_exists('swal_message')) {
    function swal_message($type, $message)
    {
        $type = in_array($type, ['success', 'error', 'warning', 'info']) ? $type : 'info';
        
        session()->flash('swal', [
            'title' => ucfirst($type).'!',
            'text'  => __($message),
            'icon'  => $type,
            'confirmButtonText' => __('OK'),
        ]);
    }
}

if (!function_exists('toast_message')) {
    function toast_message($type, $message)
    {
        $type = in_array($type, ['success', 'error', 'warning', 'info']) ? $type : 'info';
        
        session()->flash('toast', [
            'title' => __($message),
            'icon'  => $type
        ]);
    }
}

if(!function_exists('fileUploader')) {
    function fileUploader($file, $location, $size = null, $old = null, $thumb = null)
    {
        $fileManager        = new FileManager($file);
        $fileManager->path  = $location;
        $fileManager->size  = $size;
        $fileManager->old   = $old;
        $fileManager->thumb = $thumb;
        $fileManager->upload();
        return $fileManager->filename;
    }
}

if(!function_exists('fileRemover')) {
    function fileRemover($location, $filename, $thumb = null)
    {
        $fileManager           = new FileManager();
        $fileManager->path     = $location;
        $fileManager->thumb    = $thumb;
        $fileManager->filename = $filename;
        $fileManager->remove();
    }
}


if(!function_exists('getImage')) {
    function getImage($key, $image = null)
    {
        $path    = getFilePath($key);
        $default = getFileDefault($key);
        if($image && file_exists($path.'/'.$image)) {
            return asset($path.'/'.$image);
        } else {
            return asset($default);
        }
    }
}

if(!function_exists('fileManager')) {
    function fileManager()
    {
        return new FileManager();
    }
}

if(!function_exists('getFilePath')) {
    function getFilePath($key)
    {
        return fileManager()->$key()->path;
    }
}

if(!function_exists('getFileDefault')) {
    function getFileDefault($key)
    {
        return fileManager()->$key()->default;
    }
}

if(!function_exists('getFileSize')) {
    function getFileSize($key)
    {
        return fileManager()->$key()->size;
    }
}