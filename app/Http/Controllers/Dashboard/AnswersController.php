<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;

use App\Models\Answer;
use App\Models\Question;
use DB;

class AnswersController extends Controller
{
    public function index(){
        
        
    }
    public function create(){
        $questions=Question::all();
        return view('dashboard.answers.create', compact('questions'));

    }
    public function store(AnswerRequest $request){

try {
        // if (!$request->has('is_correct'))
        //         $request->request->add(['is_correct' => 0]);
        //     else
        //         $request->request->add(['is_correct' => 1]);

        
        $desc= $request->description;
        $correct= $request->is_correct;

        for($i=0; $i< count($desc); $i++){
            $datasave=[
                'description'=>$desc[$i],
                'question_id'=>$request->question_id,
                'is_correct' =>$correct[$i],


            ];


            DB::table('answers')->insert($datasave);


        }
        
            return redirect()->route('admin.tests')->with(['success' => 'تمت الاضافة بنجاح']);

        } catch (\Exception $ex) {
           
            return redirect()->route('admin.tests')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }


    }
    public function edit($id){
        $answer = Answer::find($id);

        if(!$answer){
            return redirect()->route('admin.tests')->with(['error'=>'هذا الاختيار غير موجود']);
        }else{
            return view('dashboard.answers.edit', compact('answer'));
        }

    }
    public function update($id, AnswerRequest $request){

try {

               $answer = Answer::find($id);

               if(!$answer)
                return redirect()->route('admin.answers')->with(['error' => ' هذا الاختيار غير موجود']);


               $answer->update($request->all());


            return redirect()->route('admin.answers')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.answers')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    
    public function destroy($id){

        try{

            $answer = Answer::find($id);
           
           
            if(!$answer){
                return redirect()->route('admin.answers')->with(['error'=>'هذا الاختيار غير موجود']);
            }else{
               

                $answer->delete();

            }

        
            return redirect()->route('admin.answers')->with(['success' => 'تم الحذف بنجاح']);

    } catch (\Exception $ex) {

        return redirect()->route('admin.answers')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);


    }

}

}

