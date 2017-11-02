@extends('layouts.florist.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    Products</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button onclick="location.href = '{{ url('florist/product/add') }}'" id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <table  class="table table-striped table-bordered table-hover " >
                    <thead>
                        <tr>

                            <th>Sr .</th>
                            <th>Product Name</th>
                            <th>Status</th>
                            <th>Custom Message</th>
                            <th>Character Limit</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(count($products) > 0)
                        <?php $i = $products->firstItem(); ?>
                        @foreach($products as $product)
                        <tr  class="odd gradeX">
                            <td> <?php echo $i; ?></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->getStatus() }}</td>
                            <td>{{ $product->getMessage() }}</td>
                            <td>{{ $product->c_limit}}</td>
                            <td> <img style="height:100px;width:100px;" src="{{(count($product->images))?$product->images[0]->getThumbUrlAttribute():''}}"></td>
                            <td>
                                        <a href="{{ url('florist/product/edit', $product->id) }}" class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-share"></i> Edit </a>
                                            </td>

                                            </tr>
                                            @endforeach
                                            @endif
                                            </tbody>
                                            </table>
                                            @if (!count($products))
                                            <div class="well">Record Not Found</div>
                                            @endif
                                            <div class="text-right">
                                                {!! $products->links() !!}
                                            </div>
                                            </div>
                                            </div>
                                            <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                            </div>

                                            @endsection

                                            @section('scripts')
                                            <script type="text/javascript">

                                                $(document).ready(function () {

                                                });
                                            </script>

                                            @endsection