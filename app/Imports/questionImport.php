<?php

namespace App\Imports;

use App\question;
use Maatwebsite\Excel\Concerns\ToModel;

class questionImport implements ToModel
{
    public function model(array $row)
    {
        return new question([
            'Insert_question'=>$row[0],
            'option-1'=>$row[1],
            'option-2'=>$row[2],
            'option-3'=>$row[3],
        ]);
    }
}
