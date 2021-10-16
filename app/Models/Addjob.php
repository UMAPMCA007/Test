<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addjob extends Model
{
    use HasFactory;

    protected $table="addjobs";
    protected  $fillable=[
        "job_number",
        "Customer",
        "part_number",
        "description",
        "serial_number",
        "tsn",
        "tso",
        "work_details",
        "po_number",
        "upload_po",
        "notes",
    ];

    public function setFilenamesAttribute($value)
    {

        $this->attributes['upload_po'] = json_encode($value);
    }
}
