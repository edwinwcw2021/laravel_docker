<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;
// use validator;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function getallRecord()
    {
        $data=Test::all();
        return response()->json($data,200);
    }

    public function addrecord(Request $requst)
    {
        $validator = Validator::make($requst->all(),[
            'Name'=>'required',
            'Tid'=>'required',
            'NormalDate'=>'required'
        ]);


        if($validator->fails())
        {
            $data = [
                'status'=>422,
                'message'=>$validator->messages()
            ];
            return response()->json($data, 422);
        } else {
            $ins = new Test;
            $ins->Name=$requst->Name;
            $ins->Tid=$requst->Tid;
            $ins->NormalDate=$requst->NormalDate;
            $ins->save();
            return response()->json($ins, 200);
        }
    }
}
