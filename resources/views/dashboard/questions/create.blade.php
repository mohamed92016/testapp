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
                                <li class="breadcrumb-item active"> أضافه الاسئلة 
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
                                    <h4 class="card-title" id="basic-layout-form"> أضافة السؤال  </h4>
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
                                              action="{{route('admin.questions.store',$test->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf


                                           
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> بيانات السؤال </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> وصف السؤال 
                                                            </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value=""
                                                                   name="description">
                                                            @error("description")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror

                                                            <input id="id" class="hidden" value="{{$test->id}}" name="test_id">
                                                        </div>
                                                    </div>

                                                   
                                                </div>


                                               

                                             {{-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1"
                                                                   name="is_active"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>

                                                            @error("is_active")
                                                            <span class="text-danger">{{$message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="radio"
                                                                   name="type"
                                                                   value="1"
                                                                   checked
                                                                   class="switchery"
                                                                   data-color="success"
                                                            />

                                                            <label
                                                                class="card-title ml-1">
                                                                قسم رئيسي
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="radio"
                                                                   name="type"
                                                                   value="2"
                                                                   class="switchery" data-color="success"
                                                            />

                                                            <label
                                                                class="card-title ml-1">
                                                                قسم فرعي
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}


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


    