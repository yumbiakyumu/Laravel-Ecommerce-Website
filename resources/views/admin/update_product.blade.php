<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admin.css')
  <style type="text/css">
    .div_center{
     text-align:center;
     padding-top: 40px;

    }
    .font_size{
        font-size: 40px;
        padding-bottom: 40px; 
    }
    .text_color{
        color:black;
        padding-bottom: 20px;
    }
    label{
        display:inline-block;
        width:200px;
    }
    .div_design{
        padding-bottom:15px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>  
   
{{session()->get('message')}}

</div>

@endif
         
         
         
         
          <div class="div_center">
            <h1 class="font_size">Update Product</h1>
            <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            <div class="div_design">
            <label>Product Title :</label>
             <input class="text_color"  type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">
</div>
<div class="div_design">
            <label>Description :</label>
             <input class="text_color"  type="text" name="description" placeholder="write a description" required="" value="{{$product->description}}">
</div>
<div class="div_design">
            <label>Price :</label>
             <input class="text_color"  type="number" name="price" placeholder="Enter a price" required="" value="{{$product->price}}">
</div>
<div class="div_design">
            <label>Discount Price :</label>
             <input class="text_color"  type="number"  name="dis_price" placeholder="Enter a discount price" value="{{$product->discount_price}}">
</div>
<div class="div_design">
            <label>Quantity :</label>
             <input class="text_color"  type="number" min="0" name="quantity" placeholder="write a quantity" required="" value="{{$product->quantity}}">
</div>
<div class="div_design">
            <label>Product Category :</label>
             <select class="text_color" name="category" required="">
             
             <option value="{{$product->category}}" selected="" >{{$product->category}}</option>  
             
             @foreach($category as $category)
             <option value="{{$category->category_name}}">{{$category->category_name}}</option>
             @endforeach
            
            </select>
</div>
<div class="div_design">
            <label>Current Product Image :</label>
             <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">
</div>
<div class="div_design">
            <label>Change Product Image :</label>
             <input type="file" name="image">
</div>

<div class="div_design">
            
             <input type="submit" value="Update Product" class="btn btn-primary">
</div>
</form>  
        
        
        </div>

</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script') 
  </body>
</html>