<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\online_classe;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;

class OnlineClasseController extends Controller
{

    public function index()
    {
        $online_classes = online_classe ::where('created_by',auth()->user()->email)->get();
        return view('pages.online_classes.index', compact('online_classes'));
    }




    public function indirectCreate()
    {
        $Grades = Grade::all();
       return view('pages.online_classes.indirect', compact('Grades'));

    }




    public function storeIndirect(Request $request)
    {
        try {


            online_classe::create([
                'Grade_id' => $request->Grade_id,
                'integration' => false,

                'Classroom_id' => $request->Classroom_id,
                'section_id' => $request->section_id,
                'created_by'=>auth()->user()->email,
            'meeting_id' => $request->meeting_id,
                'topic' => $request->topic,
                'start_at' => $request->start_time,
                'duration' => $request->duration,
                'password' => $request->password,
                'start_url' => $request->start_url,
                'join_url' => $request->join_url,
            ]);
            toastr()->success(trans('messages.success'));
            return redirect()->route('online_classes.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {  try{
        $info = online_classe::find($request->id);
        online_classe::where('meeting_id', $request->id)->delete();


        toastr()->success(trans('messages.Delete'));
            return redirect()->route('online_classes.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

   }
}
