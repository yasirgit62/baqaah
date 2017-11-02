<div id="f">
    <div class="form-group" >
        <label class="col-md-3 control-label">Name</label>
        <div class="col-md-4">
            {!! Form::text('name',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Gift Name', 'required' => 'true']) !!}
        </div>
    </div>
    <div class="form-group" >
        <label class="col-md-3 control-label">Short Description</label>
        <div class="col-md-4">
            {!! Form::text('short_description',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Short Description', 'required' => 'true']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Description</label>
        <div class="col-md-4">
            {!! Form::textarea('description', null, ['class' => 'form-control input-circle','placeholder'=>'Enter Description','size' => '30x5', 'required' => 'true']) !!}
            <span class="help-inline">Shown in Product Listing</span>
        </div>
    </div>
    <div class="form-group" >
        <label class="col-md-3 control-label">Gift Cost</label>
        <div class="col-md-4">
            {!! Form::text('price',null, ['class' => 'form-control input-circle amount','placeholder'=>'Enter Gift Cost', 'required' => 'true']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" >Gift Status</label>
        <div class="col-md-4" >
            {!! Form::select('status',$statusArray , null, ['class' => 'form-control input-circle', 'required' => true, 'placeholder' => 'Select Gift Status']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Arabic</label>
        <div class="col-md-4">
            <input <?php if (isset($gift->arabic)&&$gift->arabic==1)echo 'checked'; ?> type="checkbox" name="arabic" class="form-control">
        </div>
    </div>
</div>
<div id="l" hidden>
    @if(isset($gift->images) && count($gift->images) > 0)
    <div  class="col-md-12">
        <h3><b>Old Images</b></h3>
        @foreach($gift->images as $p_im)
        <div class="img-wrapp" id="{{$p_im->id}}">
            <span class="closee">&times;</span>0
            <img style="height:100px;width:100px;" src="{{url('gift_images/gift'.$gift->id.'/'.$p_im->file_name.'.thumbnail.'.$p_im->file_ext)}}" data-id="{{$p_im->id}}">
        </div>
        @endforeach
        <br>
        <br>

    </div>
    @endif
    <div class="form-group">
        <label class="col-md-3 control-label" >

            Vehical Images:

        </label>
        <div class="col-md-4">
            <input id="files" class="form-control input-circle"  type="file" name="images[]" multiple  <?php if(isset($gift)) echo '';else echo 'required'; ?> >
        </div>
    </div>
    <div class="row">

        <div id="result" class="col-md-12">
        </div>

    </div>
</div>
