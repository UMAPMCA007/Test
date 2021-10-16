<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostJobRequest;
use App\Models\Addjob;
use App\Models\Customer;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
   public function index()
   {
     return view("index");
   }
    public function viewJob()
    {
        $addJob=Addjob::all();
        return view("view-job",compact('addJob'));
    }

    public function addJob()
    {
        $customers=Customer::all();
        $parts=Part::all();
        return view("add-job",compact('customers','parts'));
    }
    public function postJob(PostJobRequest $request)
    {
       $files=[];
       $data=$request->all();
        if($request->hasfile('upload_po'))
        {
            foreach($request->file('upload_po') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);
                $files[] = $name;
            }
        }
         Addjob::create([
             'job_number'=>$data['job_number'],
              'Customer'=>$data['customer'],
              'part_number'=>json_encode($data['part_number']),
              'description'=>json_encode($data['description']),
              'serial_number'=>json_encode($data['serial_number']),
              'tsn'          =>json_encode($data['tsn']),
              'tso'          =>json_encode($data['tso']),
              'work_details'  =>$data['work_details'],
              'po_number'      =>$data['po_number'],
               'upload_po'     =>json_encode($files),
                'notes'         =>$data['notes']
             ]);

         DB::table('parts')->truncate();
         return redirect('/');
    }

    public function postPart(Request $request)
    {
        $request->validate([

            "part_number" => "required|unique:parts",
            "description" => ''
        ]);
        $part = new part;
        $part->part_number = $request->part_number;
        $part->description = $request->description;
        $part->save();
        return back();
    }
}

