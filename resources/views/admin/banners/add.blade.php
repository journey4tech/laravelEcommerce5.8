@extends('admin.layout.master')
@section('title','Add Banner')
@section('content')
   <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-product-hunt"></i>
               </div>
               <div class="header-title">
                  <h1>Add Banner</h1>
                  <small>Banner</small>
               </div>
            </section>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-sm alert-danger alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times; </span>
        </button>
        <strong>{!! session('flash_message_error')!!} </strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-sm alert-success alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times; </span>
        </button>
        <strong>{!! session('flash_message_success')!!} </strong>
        </div>
        @endif
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="{{route('list.banner')}}"> 
                              <i class="fa fa-product-hunt"></i>  Banner List </a>  
                           </div>
                        </div> 
                        <div class="panel-body">
                           <form class="col-sm-6" id="addproform" enctype="multipart/form-data" action="{{route('store.banner')}}" method="post">
                               @csrf
                              <div class="form-group">
                                 <label>Banner Name</label>
                                 <input type="text" class="form-control" placeholder="Enter banner Name" name="banner_name">
                              </div>
                             
                              <div class="form-group">
                                 <label>Text Style</label>
                                 <input type="text" class="form-control" placeholder="Enter Text Style" name="text_style">
                              </div>
                              <div class="form-group">
                                 <label>Link</label>
                                 <input type="text" class="form-control" placeholder="Banner Link"  name="banner_link">
                              </div>
                              <div class="form-group">
                                 <label>Sort Order</label>
                                 <input type="text" class="form-control" placeholder="Enter Sort Order" name="sort_order">
                              </div>
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input type="file" name="banner_image">
                              </div>
                              <div class="form-group">
                                 <label>Content</label>
                                 <textarea class="form-control" rows="3" name="banner_content"></textarea>
                              </div>
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
                                 <input type="submit" class="btn btn-success" value="Add Banner">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
@endsection
@section('js')
<script>
$(document).ready(function () {
$('#addproform').validate({ // initialize the plugin
    rules: {
      product_name: {
            required: true,
        },
        product_code: {
            required: true,
        },
        product_color: {
            required: true,
        },
        product_proce: {       
            required: true,
        },
        product_price: {       
            required: true,
        },
        product_image: {       
            required: true,
        }
    }
});

});
</script>
@endsection

