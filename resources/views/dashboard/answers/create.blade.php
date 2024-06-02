@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.tests')}}"> الاختبارات
                                         </a>
                                </li>
                               
                                <li class="breadcrumb-item"><a href="{{route('admin.questions')}}"> الاسئلة
                                         </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> اضافة الاسئلة
                                         </a>
                                </li>
                                <li class="breadcrumb-item active"> اضافه الاختيارات 
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> اضافة الاختيارات  </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="{{route('admin.answers.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf


                                           
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> الاختيارات  </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                           <label for="projectinput1">  اختر السؤال
                                                            </label>
                                                            
                                                        
                                                            <select name="question_id" class="form-control">
                                <option value="">الاسئلة</option>
                                @foreach ($questions as $question)
                                    <option value="{{ $question->id }}" {{ old('question_id') == $question->id ? 'selected' : '' }}>{{ $question->description }}</option>
                                @endforeach
                            </select>
                                                            
                                                            
                                                           @error("question_id")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror 

                                                           
                                                           

                                                            </div>
                                                    </div>

                                                           

                                                           
<br>

                                                            
                                                   <div class="col-md-12">
                                                        <div class="form-groupp">
                                                            

                                                            <label for="projectinput1">الاختيارات  
                                                            </label>
                                                         {{--  <br>
                                                            <label for="projectinput1">حدد الاختيار الصحيح  
                                                            </label>--}}

                                                            

                                                           
                                                  <div class="form-check">
                                                                
                                                   
                                        
 
                 <input class="form-check-input" type="radio" name="is_correct[]" id="flexRadioDefault1" checked value="1">
                 <input type="hidden" value="0" name="is_correct[]" >

                 <label class="form-check-label" for="flexRadioDefault1">
                 


                 

               {{-- <div class="form-check">
  <input class="form-check-input" type="checkbox" name="is_correct[]" value="1" checked  id="flexCheckDefault">
<input type="hidden" value="0" name="is_correct[]" >
  <label class="form-check-label" for="flexCheckDefault">--}}
  <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value=""
                                                                   name="description[]">

  </label>
</div>

@error("description")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            @error("is_correct")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror  
                                                            
                      

  

                                                                   
<br>
                                                                   
                                                          


                                                                                    
                                                          {{--  <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> 
                                                            </label>
                                                            <input class="form-check-input" type="radio" name="is_correct[]" id="flexRadioDefault1" value=description[0]>

                                                            @error("is_correct")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label for="projectinput1">   
                                                            </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value=""
                                                                   name="description">
                                                            @error("description")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror

                                                        </div>
                                                    </div>--}}
                                                   
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_button" title="Add field">
                                                           <button type="button" class="btn btn-info"> اضافة اختيار </button>

                                                           </a>

                                                    </div>
                                                   

                                                   
                                                </div>

                                             

                                            
                                            <div class="field_wrapper">
    

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> اضافة
                                                </button>
                                            </div>
                                           
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>


    <style>
    .btn-warning {
    border-color: #d18a0f !important;
    background-color: #e69710 !important;
    color: #FFFFFF;
}
    .btn-warning:hover {
    border-color: #d18a0f !important;
    background-color: #e69710 !important;
    color: #FFFFFF;
}

.btn-primary {
    border-color:#1E9FF2 !important;
    background-color:#1E9FF2!important;
    color: #FFFFFF;
}
.btn-primary:hover {
    border-color:#1E9FF2 !important;
    background-color:#1E9FF2!important;
    color: #FFFFFF;
}

</style>







@stop

@section('script')


<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.form-groupp'); //Input field wrapper
    // var fieldHTML = ' <input type="text" id="name" class="form-control placeholder="  " value="" name="name">  <br> '; //New input field html 
    
    var fieldHTML = '<div class="form-check"> <input class="form-check-input" type="radio" name="is_correct[]" id="flexRadioDefault1" checked value="1"><input type="hidden" value="0" name="is_correct[]" > <label class="form-check-label" for="flexRadioDefault1"> <input type="text" id="name" class="form-control"  placeholder="  "  value=""  name="description[]"></label></div> <br>';
    // var fieldHTML = '<div class="form-check"><input class="form-check-input" type="checkbox" value="1" checked name="is_correct[]"  id="flexCheckDefault"><input type="hidden" value="0" name="is_correct[]" ><label class="form-check-label" for="flexCheckDefault"><input type="text" id="name"class="form-control"placeholder="  "value=""name="description[]"></label></div><br>';
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>



   
    @stop