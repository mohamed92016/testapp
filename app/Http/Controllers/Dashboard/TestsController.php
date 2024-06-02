<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use DB;


class TestsController extends Controller
{
    public function index(Request $request){
   
        $tests=Test::when($request->search, function($q) use($request){
            
          return $q->whereTranslationLike('name', '%'. $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.tests.index', compact('tests'));

    }
    public function create(){

        return view('dashboard.tests.create');

    }
    public function store(TestRequest $request){
        

        // $test = Test::insert([
        //     'name'=> $request->name,
        // ]);

        // return view('dashboard.tests.create');


        try {

            DB::beginTransaction();

            //validation

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

           
           

            $test = Test::create($request->except('_token'));

            
            $test->name = $request->name;
            $test->save();
            DB::commit();

            return redirect()->route('admin.tests')->with(['success' => 'تمت الاضافة بنجاح']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.tests')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    
    public function edit($id){

        // $qu = Question::all();
        // dd($qu);
        $test = Test::find($id);

        // $que = Question::where('id', $test->question_id)->get();

        // dd($que);
        
        // $question = Question::find();
// dd($question);
        // $test = Test::find($id);
        // dd($test);

        if(!$test){
            return redirect()->route('admin.tests')->with(['error'=>'هذا الاختبار غير موجود']);
        }else{
            return view('dashboard.tests.edit', compact('test'));
        }


    }
    public function update($id, TestRequest $request){

        try {

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

             
               $test = Test::find($id);

               if(!$test)
                return redirect()->route('admin.tests')->with(['error' => ' هذا الاختبار غير موجود']);


               
               

               $test->update($request->all());


            return redirect()->route('admin.tests')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.tests')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id){
        try{

            $test = Test::find($id);

            if(!$test){
                return redirect()->route('admin.tests')->with(['error'=>'هذا الاختبار غير موجود']);
            }else{
               

                $test->delete();
            }

        
            return redirect()->route('admin.tests')->with(['success' => 'تم الحذف بنجاح']);

    } catch (\Exception $ex) {

        return redirect()->route('admin.tests')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);


    }

    }
}