@extends('layouts.florist.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_0" id="tab1" data-toggle="tab"> Product Info</a>
                </li>
                <li>
                    <a href="#tab_1" id="tab2" data-toggle="tab"> Images </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_0">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Add Product</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::open([
                            'url' => url('florist/product/add'),
                            'method' => 'post',
                            'class' => 'form-horizontal',
                            'id' => 'form_sample_2',
                            'files' => true
                            ]) !!}

                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                 @include('florist.product.partials.createEdit')
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">Update</button>
                                        <a href="{{url('florist/product/index')}}" class="btn btn-circle grey-salsa btn-outline">Cancel</a>
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
@section('scripts')
<script>
    document.querySelector(".amount").addEventListener("keypress", function (evt) {
	
    if (evt.which > 47 && evt.which < 58 )
    {
       
    }else{
        alert('Plz Type Correct Amount');
		 evt.preventDefault();
	}
});
    $(document).ready(function () {
        $(document).on('click', '#tab1', function () {

            $('#f').show();
            $('#l').hide();
        });
        $(document).on('click', '#tab2', function () {
            $('#l').show();
            $('#f').hide();

        });

    });
</script>
@endsection
