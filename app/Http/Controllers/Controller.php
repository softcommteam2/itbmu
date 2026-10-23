<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Build a safe stored file name: "time.original-name.ext".
     * The extension comes from the file's real content, never from the
     * client's file name, so an uploaded "shell.php" can't be stored as PHP.
     */
    protected function safeFileName(UploadedFile $file): string
    {
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $name = preg_replace('/[^\p{L}\p{M}\p{N} _()-]+/u', '_', $name);
        $name = trim(mb_substr($name, 0, 100), ' _');

        return time().'.'.($name !== '' ? $name : Str::random(8)).'.'.$file->extension();
    }
}
