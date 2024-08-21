<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';

    public function cariPengumuman($id)
    {
        $data = Pengumuman::where('id',$id)->first();

        return $data;
    }
}
