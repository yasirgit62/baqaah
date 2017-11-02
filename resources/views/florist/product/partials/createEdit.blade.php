<div id="f">
    <div class="form-group" >
        <label class="col-md-3 control-label">Name</label>
        <div class="col-md-4">
            {!! Form::text('name',null, ['class' => 'form-control input-circle','placeholder'=>'Enter Product Name', 'required' => 'true']) !!}
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

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Regular Price</label>
        <div class="col-md-4">
            {!! Form::text('price', null, ['class' => 'form-control input-circle','placeholder'=>'Enter Regular Size Price', 'required' => 'true']) !!}

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Regular weight</label>
        <div class="col-md-4">
            {!! Form::text('weight', null, ['class' => 'form-control input-circle','placeholder'=>'Enter Regular Size Weight', 'required' => 'true']) !!}

        </div>
    </div>
    @if(isset($product))
    <div class="form-group" >
        <label class="col-md-3 control-label">Product Price</label>
        <div class="col-md-4" >
            <table  class="table table-striped table-bordered table-hover " >
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sizes as $size)
                    @if($size->id != 2)
                    <?php $p_size = \App\Models\ProductSize::where('product_id',$product->id)->where('size_id',$size->id)->first(); ?>
                    <tr  class="odd gradeX">
                        
                   
                    <td><input type="checkbox" value="{{$size->id}}" name="input_size[]" <?php if($p_size) echo 'checked';?>  > {{$size->name}} </td>
                    <td><input type="text" value="<?php if($p_size) echo $p_size['price'] ;?>"  name="input_price[]" > </td>
                        <td><input type="text" value="<?php if($p_size) echo $p_size['weight'] ;?>"  name="input_weight[]" ></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @else
    <div class="form-group" >
        <label class="col-md-3 control-label">Product Price</label>
        <div class="col-md-4" >
            <table  class="table table-striped table-bordered table-hover " >
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sizes as $size)
                    @if($size->id != 2)
                    <tr  class="odd gradeX">
                        <td><input type="checkbox" value="{{$size->id}}" name="input_size[]"  > {{$size->name}} </td>
                        <td><input type="text"  name="input_price[]" > </td>
                        <td><input type="text"  name="input_weight[]" ></td>
                    </tr>
                    @endif
                    @endforeach
             </tbody>
            </table>

        </div>
    </div>
    @endif
    
    <div class="form-group" >
        <label class="col-md-3 control-label">Delivery Time</label>
        <div class="col-md-4">
            {!! Form::text('delivery_time',null, ['class' => 'form-control input-circle amount','placeholder'=>'Enter Product Delivery Time', 'required' => 'true']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" >Product Status</label>
        <div class="col-md-4" >
            {!! Form::select('status',$statusArray , null, ['class' => 'form-control input-circle', 'required' => true, 'placeholder' => 'Select Product Status']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" >Product Catagories</label>
        <div class="col-md-4" >
            {!! Form::select('catagories[]', $catagoryArray, null, ['class' => 'form-control select2 input-circle', 'multiple' => true, 'required' => 'true']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" >Gifts</label>
        <div class="col-md-4" >
            {!! Form::select('gifts[]', $giftArray, null, ['class' => 'form-control select2 input-circle', 'multiple' => true]) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Custom Message</label>
        <div class="col-md-4">
            <input <?php if (isset($product->c_message) && $product->c_message == 1) echo 'checked'; ?> type="checkbox" name="c_message" class="form-control">
        </div>
    </div>
    <div class="form-group" >
        <label class="col-md-3 control-label">Character Limit</label>
        <div class="col-md-4">
            {!! Form::text('c_limit',null, ['class' => 'form-control input-circle amount','placeholder'=>'Enter Charactert Limit', 'required' => 'true']) !!}
        </div>
    </div>
</div>
<div id="l" hidden>
    @if(isset($product->images) && count($product->images) > 0)
    <div  class="col-md-12">
        <h3><b>Old Images</b></h3>
        @foreach($product->images as $p_im)
        <div class="img-wrapp" id="{{$p_im->id}}">
            <span class="closee">&times;</span>0
            <img style="height:100px;width:100px;" src="{{url('product_images/product'.$product->id.'/'.$p_im->file_name.'.thumbnail.'.$p_im->file_ext)}}" data-id="{{$p_im->id}}">
        </div>
        @endforeach
        <br>
        <br>

    </div>
    @endif
    <div class="form-group">
        <label class="col-md-3 control-label" >

            Product Images:

        </label>
        <div class="col-md-4">
            <input id="files" class="form-control input-circle"  type="file" name="images[]" multiple  <?php
            if (isset($product))
                echo '';
            else
                echo 'required';
            ?> >
        </div>
    </div>
    <div class="row">

        <div id="result" class="col-md-12">
        </div>

    </div>
</div>
