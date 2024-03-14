<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | E-commerce</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">


    <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="logo" href="index.html"><img src="frontend/images/logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/design">Our Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shop">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="search_icon">
                <ul>
                  <li><a href="#"><img src="frontend/images/search-icon.png"></a></li>
                  <li><a href="#"><img src="frontend/images/user-icon.png"></a></li>
                </ul>
              </div>
            </form>
          </div>
      </nav>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper"> -->
    <div>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>E-commerce</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">E-commerce</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">Testing</h3>
                <div class="col-12">
                  <!-- <img src="{{ asset('uploads/'.$product->product_image) }}" style=" height:150px;"> -->
                  <img src="{{ asset('uploads/'.$product->product_image) }}" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                  <div class="product-image-thumb active"><img src="{{ asset('uploads/'.$product->product_image) }}" alt="Product Image"></div>
                  <!-- <div class="product-image-thumb" ><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div> -->
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$product->product_name}}</h3>
                <p>{{$product->product_description}}</p>

                <hr>
                <h4>Available Colors</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-default text-center active">
                    <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                    Green
                    <br>
                    <i class="fas fa-circle fa-2x text-green"></i>
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                    Blue
                    <br>
                    <i class="fas fa-circle fa-2x text-blue"></i>
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                    Purple
                    <br>
                    <i class="fas fa-circle fa-2x text-purple"></i>
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                    Red
                    <br>
                    <i class="fas fa-circle fa-2x text-red"></i>
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                    Orange
                    <br>
                    <i class="fas fa-circle fa-2x text-orange"></i>
                  </label>
                </div>

                <h4 class="mt-3">Size <small>Please select one</small></h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                    <span class="text-xl">S</span>
                    <br>
                    Small
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                    <span class="text-xl">M</span>
                    <br>
                    Medium
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                    <span class="text-xl">L</span>
                    <br>
                    Large
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                    <span class="text-xl">XL</span>
                    <br>
                    Xtra-Large
                  </label>
                </div>

                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">
                    Rs. {{ $product->product_price}}.00
                  </h2>
                  <!-- <h4 class="mt-0">
                  <small>Ex Tax: $80.00 </small>
                </h4> -->
                </div>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $product->id }}" name="id">
                  <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                  <input type="hidden" value="{{ $product->product_price }}" name="product_price">
                  <input type="hidden" value="{{ $product->product_image }}" name="product_image">
                  <input type="hidden" value="1" name="quantity">
                  <div class="mt-4">
                    <!-- <div class="btn btn-primary btn-lg btn-flat">
                      <i class="fas fa-cart-plus fa-lg mr-2"></i>
                      Add to Cart
                    </div> -->
                    <button class="btn btn-primary btn-lg btn-flat"><i class="fas fa-cart-plus fa-lg mr-2"></i>Add To Cart</button>
                </form>



                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Add to Wishlist
                </div>
              </div>

              <!-- <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div> -->

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script>
    $(document).ready(function() {
      $('.product-image-thumb').on('click', function() {
        var $image_element = $(this).find('img')
        $('.product-image').prop('src', $image_element.attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
      })
    })
  </script>
</body>

</html>