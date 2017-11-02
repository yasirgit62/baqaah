@extends('layouts.florist.master')

@section('content')
<style>
  .img-wrapp {
        position: relative;
        display: inline-block;
        border: 1px red solid;
        font-size: 0;
    }
    .img-wrapp .closee {
        position: absolute;
        top: 2px;
        right: 2px;
        z-index: 100;
        background-color: #FFF;
        padding: 5px 2px 2px;
        color: #000;
        font-weight: bold;
        cursor: pointer;
        opacity: .2;
        text-align: center;
        font-size: 22px;
        line-height: 10px;
        border-radius: 50%;
    }
    .img-wrapp:hover .closee {
        opacity: 1;
    }
</style>
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
                                <i class="fa fa-gift"></i>Edit Product</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::model($product,[
                            'url' => url('florist/product/edit',$product->id),
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
     $('.img-wrap .close').on('click', function () {
        var id = $(this).closest('.img-wrap').find('img').data('id');
        var myUrl = window.baseUrl + '/claim_service_img_del/' + id;

        $.ajax({
            type: "get",
            url: myUrl,

            success: function (msg) {

                $('#' + id).remove();
            }
        });
    });
</script>
@endsection
