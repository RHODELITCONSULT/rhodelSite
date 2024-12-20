@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $title }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              @if(Session::has('success_message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success:</strong> {{ Session::get('success_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form name="productForm" id="productForm" @if(empty($product['id'])) action="{{ url('admin/add-edit-product') }}" @else action="{{ url('admin/add-edit-product/'.$product['id']) }}" @endif method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category_id">Select Category*</label>
                    <select name="category_id" class="form-control">
                      <option value="">Select</option>
                      @foreach($getCategories as $cat)
                      <option @if(!empty(@old('category_id')) && $cat['id']==@old('category_id')) selected="" @elseif(!empty($product['category_id']) && $product['category_id']==$cat['id']) selected="" @endif value="{{ $cat['id'] }}">{{ $cat['category_name'] }}</option>
                      @if(!empty($cat['subcategories']))
                      @foreach($cat['subcategories'] as $subcat)
                      <option @if(!empty(@old('category_id')) && $subcat['id']==@old('category_id')) selected="" @elseif(!empty($product['category_id']) && $product['category_id']==$subcat['id']) selected="" @endif value="{{ $subcat['id'] }}">&nbsp;&nbsp;&raquo;&nbsp;&nbsp;&nbsp;{{ $subcat['category_name'] }}</option>
                      @if(!empty($subcat['subcategories']))
                      @foreach($subcat['subcategories'] as $subsubcat)
                      <option @if(!empty(@old('category_id')) && $subsubcat['id']==@old('category_id')) selected="" @elseif(!empty($product['category_id']) && $product['category_id']==$subsubcat['id']) selected="" @endif value="{{ $subcat['id'] }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;{{ $subsubcat['category_name'] }}</option>
                      @endforeach
                      @endif
                      @endforeach
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="brand_id">Select Brand*</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                      <option value="">Select</option>
                      @foreach($getBrands as $brand)
                      <option value="{{ $brand['id'] }}" @if(!empty($product['brand_id']) && $product['brand_id']==$brand['id']) selected="" @endif> {{ $brand['brand_name'] }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="product_name">Product Name*</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" @if(!empty($product['product_name'])) value="{{ $product['product_name'] }}" @else value="{{ @old('product_name') }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="product_code">Product Code*</label>
                    <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code" @if(!empty($product['product_code'])) value="{{ $product['product_code'] }}" @else value="{{ @old('product_code') }}" @endif>
                  </div>
                  
                 
                 
                  <div class="form-group">
                    <label for="product_images">Product Image (Recommended Size: 1040 x 1200)</label>
                    <input type="file" class="form-control" id="product_images" name="product_images[]" multiple="">
                    <table cellpadding="10" cellspacing="10" border="1" style="margin:10px;">
                      <tr>
                        @foreach($product['images'] as $image)
                        <td style="background-color:#f9f9f9;">
                          <a target="_blank" href="{{ url('front/images/products/large/'.$image['image']) }}"><img style="width:60px;" src="{{ asset('front/images/products/small/'.$image['image']) }}"></a>&nbsp;
                          <input type="hidden" name="image[]" value="{{ $image['image'] }}">
                          <input style="width:30px;" type="text" name="image_sort[]" value="{{ $image['image_sort'] }}">
                          <a style='color:#3f6ed3;' class="confirmDelete" title="Delete Product Image" href="javascript:void(0)" record="product-image" recordid="{{ $image['id'] }}"><i class="fas fa-trash"></i></a>
                        </td>
                        @endforeach
                      </tr>
                    </table>
                  </div>
                  <div class="form-group">
                    <label for="product_video">Product Video (Recommended Size: Less than 2 MB)</label>
                    <input type="file" class="form-control" id="product_video" name="product_video">
                    @if(!empty($product['product_video']))
                    <a target="_blank" href="{{ url('front/Videos/products/'.$product['product_video']) }}" style="color:#ccc">View</a>
                    <a class="confirmDelete" title="Delete Product Video" href="javascript:void(0)" record="product-video" recordid="{{ $product['id'] }}" style="color:#ccc">Delete</a>
                    @endif
                  </div>
                 
                  
                  
                    
                 
                
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter Product Description">@if(!empty($product['description'])) {{ $product['description'] }} @else  {{ @old('description') }} @endif</textarea>
                  </div>
                 
                
                  <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" @if(!empty($product['meta_title'])) value="{{ $product['meta_title'] }}" @else value="{{ old('meta_title') }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description" @if(!empty($product['meta_description'])) value="{{ $product['meta_description'] }}" @else value="{{ old('meta_description') }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords" @if(!empty($product['meta_keywords'])) value="{{ $product['meta_keywords'] }}" @else value="{{ old('meta_keywords') }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="is_featured">Featured Items</label>
                    <input type="checkbox" name="is_featured" value="Yes" @if(!empty($product['is_featured']) && $product['is_featured']=="Yes" ) checked="" @endif>
                  </div>
                  <div class="form-group">
                    <label for="is_bestseller">Best Seller</label>
                    <input type="checkbox" name="is_bestseller" value="Yes" @if(!empty($product['is_bestseller']) && $product['is_bestseller']=="Yes" ) checked="" @endif>
                  </div>

                </div>
                <!-- /.card-body -->

                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
      </div>
      <!-- /.card -->

      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection