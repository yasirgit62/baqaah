@extends('layouts.florist.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_0" id="tab1" data-toggle="tab"> Personal Info</a>
                </li>
                <li>
                    <a href="#tab_1" id="tab2" data-toggle="tab"> Change Password </a>
                </li>
                <li>
                    <a href="#tab_2" id="tab3" data-toggle="tab"> Delivery Areas </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_0">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Update Password </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::model($florist,[
                            'url' => url('florist/profile/edit',$florist->id),
                            'method' => 'post',
                            'class' => 'form-horizontal',
                            'id' => 'form_sample_2',
                            'files' => true
                            ]) !!}

                            <div class="form-body">
                                <div class="form-group" >
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-4">
                                        @if($florist->file_name != null)
                                         <img style="height:100px;width:100px;" src="{{url('profile_images/'.$florist->file_name.'.thumbnail.'.$florist->file_ext)}}">
                                        @else
                                          <img style="height:100px;width:100px;" src="{{url('default.png')}}" >
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-4">
                                        {!! Form::text('first_name',$florist->user->first_name, ['class' => 'form-control input-circle','placeholder'=>'Enter First Name', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-4">
                                        {!! Form::text('last_name',$florist->user->last_name, ['class' => 'form-control input-circle','placeholder'=>'Enter Last Name', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">Store Name</label>
                                    <div class="col-md-4">
                                        {!! Form::text('store_name',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Store Name', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">Mobile No</label>
                                    <div class="col-md-4">
                                        {!! Form::text('phone',$florist->user->phone, ['class' => 'form-control input-circle','placeholder'=>'Enter Mobile No', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Your Area</label>
                                    <div class="col-md-4" >
                                        {!! Form::select('area_id',$areasArray , null, ['class' => 'form-control input-circle', 'required' => true, 'placeholder' => 'Select Your Area']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Address</label>
                                    <div class="col-md-4">
                                        {!! Form::textarea('address', null, ['class' => 'form-control input-circle','placeholder'=>'Enter Address','size' => '30x5', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">No of Delivery Cars</label>
                                    <div class="col-md-4">
                                        {!! Form::text('delivery_cars',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Mobile No', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Profile Picture: </label>
                                    <div class="col-md-4">
                                        <input id="files" class="form-control input-circle"  type="file" name="image"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" ></label>
                                    <div id="result" class="col-md-4">

                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">Update</button>
                                        <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="tab_1">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Update Password </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::model($florist,[
                            'url' => url('florist/profile/update_password',$florist->id),
                            'method' => 'post',
                            'class' => 'form-horizontal',
                            'id' => 'form_sample_2',
                            'files' => true
                            ]) !!}

                            <div class="form-body">
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">Password</label>
                                    <div class="col-md-4">
                                        {!! Form::text('password',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Password', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-4">
                                        {!! Form::text('confirm_password',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Confirm Password', 'required' => 'true']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">Update</button>
                                        <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Delivery Areas </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::model($florist,[
                            'url' => url('florist/profile/update_delivery',$florist->id),
                            'method' => 'post',
                            'class' => 'form-horizontal',
                            'id' => 'form_sample_2',
                            'files' => true
                            ]) !!}

                            <div class="form-body">
                                <div class="form-group" >
                                    <label class="col-md-3 control-label">Minimum Order</label>
                                    <div class="col-md-4">
                                        {!! Form::text('minimum_order',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Minimum order', 'required' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Delivery Areas</label>
                                    <div class="col-md-4" >
                                        {!! Form::select('areas[]', $areasArray, null, ['class' => 'form-control select2 input-circle', 'multiple' => true, 'required' => 'true']) !!}
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <table  class="table table-striped table-bordered table-hover " >
                                            <thead>
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Remain Closed</th>
                                                    <th>Opening On</th>
                                                    <th>Closing On</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($florist->timings as $t)
                                                <tr  class="odd gradeX">

                                                    <td>{{ $t->day->name }}</td>
                                                    <td><input class="form-control" name="day_chk[]" type="checkbox" value="{{$t->day_id}}" <?php if ($t->closed == '1') echo 'checked'; ?> ></td>
                                                    <td><div class="col-md-12"><div class="input-group">
                                                                <input type="text" class="form-control timepicker timepicker-24" name="opening[]" value="{{$t->opening}}">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-clock-o"></i>
                                                                    </button>
                                                                </span>
                                                            </div></div></td>
                                                    <td><div class="col-md-12"><div class="input-group">
                                                                <input type="text" class="form-control timepicker timepicker-24" name="closing[]" value="{{$t->closing}}">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-clock-o"></i>
                                                                    </button>
                                                                </span>
                                                            </div></div></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">Update</button>
                                        <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

