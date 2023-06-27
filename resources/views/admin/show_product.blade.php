<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
    .center{
        margin:auto;
        width:50%;
        border: 2px solid white;
        text-align:center;
        margin-top: 40px;
    }
    .font_size
    {
        text-align:center;
        font-size: 40px;
        padding-top:20px;
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
<h2 class="font_size">All Products</h2>
        <table class="center">
<tr>
    <th>Product Title</th>
    <th>Description</th>
    <th>Quantity</th>
    <th>Category</th>
    <th>Price</th>
    <th>Discount Price</th>
    <th>Product Image</th>
</tr>
@foreach($product as $product)
<tr>
    <td>{{$product->title}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->quantity}}</td>
    <td>{{$product->category}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->discount_price}}</td>
    <td>
        <img src="/product/{{$product->image}}">
    </td>
    

</tr>
@endforeach

</table>

    
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script') 
  </body>
</html>