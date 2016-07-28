<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function uploadFile($input)
    {
        $file = $input->getClientOriginalName();

        $input->move(public_path('images/uploads'), $file);

        $path = '/images/uploads/' . $file;

        //$fileModel = new File(['path' => $path]);

        //$fileModel->save();

        return $path;
    }
}
