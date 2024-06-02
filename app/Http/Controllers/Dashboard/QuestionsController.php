<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest ;

use App\Models\Question;
use App\Models\Test;
use DB;


class QuestionsController extends Controller
{
    public function index(Request $request){

       
 
        $questions= Question::all();
        $test= Test::all();
        $questions= Question::when($request->search, function($q) use($request){
            return $q->whereTranslationLike('name', '%'. $request->search . '%');

        })->when($request->test_id, function($q) use($request){
            return $q->where('test_id', $request->test_id);

        })->latest()->paginate(5);

        return view('dashboard.questions.index', compact('questions'));
        
    }
    public function create($id){

        $test = Test::find($id);


        return view('dashboard.questions.create', compact('test'));

    }
    public function store($id, QuestionRequest $request){

        

        
    


        


        try {


            DB::beginTransaction();

            //validation

           
           
           

            $que = Question::create($request->except('_token'));

            
            $que->description = $request->description;
            $que->test_id = $request->test_id;

            $que->save();

           
            DB::commit();

            return redirect()->route('admin.tests')->with(['success' => 'تمت الاضافة بنجاح']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.tests')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }


    }
    public function edit($id){

        $que = Question::find($id);

        if(!$que){
            return redirect()->route('admin.tests')->with(['error'=>'هذا السؤال غير موجود']);
        }else{
            return view('dashboard.questions.edit', compact('que'));
        }
    }
    public function update($id,QuestionRequest $request){
        try {

             
               $que = Test::find($id);

               if(!$que)
                return redirect()->route('admin.questions')->with(['error' => ' هذا السؤال غير موجود']);


               $que->update($request->all());


            return redirect()->route('admin.questions')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.questions')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }

    
    public function destroy($id){
try{

            $que = Question::find($id);
           
            // $this->id = $id;

            // $answer = Answer::where('question_id',$id)->get();


            if(!$que){
                return redirect()->route('admin.tests')->with(['error'=>'هذا السؤال غير موجود']);
            }else{
               

                $que->delete();
                // $answer->delete();

            }

        
            return redirect()->route('admin.questions')->with(['success' => 'تم الحذف بنجاح']);

    } catch (\Exception $ex) {

        return redirect()->route('admin.questions')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);


    }

}
}
