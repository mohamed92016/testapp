
@extends('layouts.admin')
@section('content')

    



    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">  الاسئلة </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.tests')}}">الاختبارات</a>
                                </li>
                                <li class="breadcrumb-item active">  الاسئلة
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الاسئلة  </h4>
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

                                <div class="card-content collapse show ">
                                    <div class="card-body card-dashboard">
                                        <table 
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>السؤال </th>
                                               
                                                
                                                <th>الاختبار</th>
                                                
                                                <th>الإجراءات</th>
                                                <th> اضافة الاختيارات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($questions)
                                                @foreach($questions as $question)
                                                    <tr>
                                                        <td>{{$question -> description}}</td>
                                                        <td>{{$question -> description}}</td>
                                                        
                                                        
                                                      {{--  <td>{{$test -> getActive()}}</td>--}}
                                                        <td>    متاح</td>
                                                        
                                                          <td>  <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.tests.edit',$test -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{route('admin.tests.delete',$test -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>



                                                            </div>
                                                            
                                                        </td>
                                                          <td>  <div class="btn-group" role="group"
                                                                 aria-label="Basic example">

                                                                   <a href="{{route('admin.questions.create',$test -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">اضف الاسئلة</a>



                                                            </div>
                                                            
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

   

    

    <style>
.btn-outline-primary {
    border-color:#d18a0f ;
    background-color: transparent;
    color: #e69710;
}
.btn-outline-primary:hover {
    border-color:#d18a0f ;
    background-color:  #e69710;
    color: #FFFFFF;
}

.btn-outline-danger {
    border-color: #1E9FF2;
    background-color: transparent;
    color:#1E9FF2;
}
.btn-outline-danger:hover {
    border-color: #1E9FF2;
    background-color: #1E9FF2;
    color: #FFFFFF;
}
    .btn-primary { 
    /* border-color: #535BE2 !important;
    background-color: #666EE8 !important; */
     border-color: #d18a0f !important;
    background-color: #e69710 !important;
    color: #FFFFFF; 
 }
  .btn-primary:hover {
    /* border-color: #535BE2 !important; --> -->
    background-color: #666EE8 !important; */
     border-color: #d18a0f !important;
    background-color: #e69710 !important;
    color: #FFFFFF;
}
</style> 
@stop
