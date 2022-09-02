<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentsRequest;
use App\Repository\StudentRepositoryInterface;
use Illuminate\Http\Request;

use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Image;
use App\Models\Section;
use App\Models\Student;

use App\Models\Type_Blood;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class StudentsController extends Controller
{





        protected $Student;

        public function __construct(StudentRepositoryInterface $Student)
        {
            $this->Student = $Student;
        }


        public function index()
        {
           return $this->Student->Get_Student();
        }


        public function create()
        {
            $data['my_classes'] = Grade::all();
            $data['Genders'] = Gender::all();
            $data['bloods'] = Type_Blood::all();
            return view('pages.Students.new', $data);
        }

        public function store(StoreStudentsRequest $request)
        {



                DB::beginTransaction();

                try {
                    $students = new Student();
                    $students->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
                    $students->email = $request->email;
                    $students->password = Hash::make($request->password);
                    $students->gender_id = $request->gender_id;

                    $students->blood_id = $request->blood_id;
                    $students->Date_Birth = $request->Date_Birth;
                    $students->Grade_id = $request->Grade_id;
                    $students->Classroom_id = $request->Classroom_id;
                    $students->section_id = $request->section_id;

                    $students->academic_year = $request->academic_year;
                    $students->save();

                    // insert img
                    if($request->hasfile('photos'))
                    {
                        foreach($request->file('photos') as $file)
                        {
                            $name = $file->getClientOriginalName();
                            $file->storeAs('attachments/students/'.$students->name, $file->getClientOriginalName(),'upload_attachments');

                            // insert in image_table
                            $images= new Image();
                            $images->filename=$name;
                            $images->imageable_id= $students->id;
                            $images->imageable_type = 'App\Models\Student';
                            $images->save();
                        }
                    }
                    DB::commit(); // insert data
                    toastr()->success(trans('messages.success'));
                    return redirect()->route('login.show','student');

                }

                catch (\Exception $e){
                    DB::rollback();
                    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
                }

            }





        public function show($id){

         return $this->Student->Show_Student($id);

        }



        public function edit($id)
        {
           return $this->Student->Edit_Student($id);
        }


        public function update(StoreStudentsRequest $request)
        {

            return $this->Student->Update_Student($request);

        }


        public function destroy(Request $request)
        {
            return $this->Student->Delete_Student($request);
        }

        public function Get_classrooms($id)
        {
            return $this->Student->Get_classrooms($id);
        }

        public function Get_Sections($id)
        {
            return $this->Student->Get_Sections($id);
        }


        public function Download_attachment($studentsname ,$filename)
        {

        return $this->Student->Download_attachment($studentsname,$filename);
        ;
    }

    public function Delete_attachment(Request $request)
    {
            return $this->Student->Delete_attachment($request);
        }



        public function Upload_attachment(Request $request)
        {
            return $this->Student->Upload_attachment($request);
        }


}
