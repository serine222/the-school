<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class TeachersController extends Controller
{
    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function index()
    {
        $Teachers = $this->Teacher->getAllTeachers();
        //$Teachers = Teacher::all();
        return view('pages.Teachers.Teachers',compact('Teachers'));
    }

    public function create()
    {
         $specializations = $this->Teacher->Getspecialization();
         $genders = $this->Teacher->GetGender();
         return view('pages.Teachers.new',compact('specializations','genders'));
    }


    public function store(StoreTeachers $request)
    {

    try {
        $Teachers = new Teacher();
        $Teachers->email = $request->Email;
        $Teachers->password =  Hash::make($request->Password);
        $Teachers->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $Teachers->Specialization_id = $request->Specialization_id;
        $Teachers->Gender_id = $request->Gender_id;
        $Teachers->Joining_Date = $request->Joining_Date;
        $Teachers->Address = $request->Address;
        $Teachers->save();
        toastr()->success(trans('messages.success'));
        return redirect()->route('login.show','teacher');
    }
    catch (\Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $Teachers = $this->Teacher->editTeachers($id);
        $specializations = $this->Teacher->Getspecialization();
        $genders = $this->Teacher->GetGender();
        return view('pages.Teachers.edit',compact('Teachers','specializations','genders'));
    }


    public function update(Request $request)
    {
        return $this->Teacher->UpdateTeachers($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return $this->Teacher->DeleteTeachers($request);
    }
}
