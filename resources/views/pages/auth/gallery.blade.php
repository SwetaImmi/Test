@extends('pages.layout.home')
@section('')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Gallery</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Gallery</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">PRODUCT GALLERY</h4>
            </div>
            <div class="card-body">
           
              <div>
                <div class="btn-group w-100 mb-2">
                  <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                  
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (JUICE) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (TEA) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COFFEE) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COFFEE, TEA) </a>
                </div>
                <div class="mb-2">
                  <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                  <div class="float-right">
                    <!-- <select class="custom-select" style="width: auto;" data-sortOrder>
                      <option value="index"> Sort by Position </option>
                      <option value="sortData"> Sort by Custom Data </option>
                    </select> -->
                    <div class="btn-group" data-sortOrder>
                      <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                      <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="filter-container p-0 row">
                <?php if (Auth::check()) {
    if (Auth::user()->role == 'Admin') { // if the current role is Administrator
  ?>
                 
                @foreach($product as $products)
                  @if($products->juice)
                  <!-- <div>    <img class="form-control" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 150px;width:200px;" name="image" type="file">
</div> -->
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="{{ asset('uploads/'.$products->product_image) }}?text=1,{{$products->product_catogery}}" data-toggle="lightbox" data-title="{{$products->product_name}} <P>{{$products->product_catogery}}</P>">
                      <img src="{{ asset('uploads/'.$products->product_image) }}?$products->juice" class="img-fluid mb-2" alt="white sample" style="height:150px; width:200px;" />
                      
                    </a>
                  </div>
                  @elseif($products->tea)
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="{{ asset('uploads/'.$products->product_image) }}?text=2" data-toggle="lightbox" data-title="{{$products->product_name}} <div>{{$products->product_catogery}}</div>">
                      <img src="{{ asset('uploads/'.$products->product_image) }}?text=2" class="img-fluid mb-2" alt="black sample" style="height:150px; width:200px;"/>
                    </a>
                  </div> 

                  @elseif($products->coffee)
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="{{ asset('uploads/'.$products->product_image) }}?text=4" data-toggle="lightbox" data-title="{{$products->product_name}} <div>{{$products->product_catogery}}</div>">
                      <img src="{{ asset('uploads/'.$products->product_image) }}?text=4" class="img-fluid mb-2" alt="red sample" style="height:150px; width:200px;"/>
                    </a>
                  </div>

                  @else
                  <!-- <span>No image found!</span> -->
                  @endif
                  @endforeach

                  <?php }
                  elseif(Auth::user()->role == 'User')  {

                    ?>
                        @foreach($product as $products)
                @if(Auth::user()->email == $products->email)
                  @if($products->juice)
                  <!-- <div>    <img class="form-control" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 150px;width:200px;" name="image" type="file">
</div> -->
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="{{ asset('uploads/'.$products->product_image) }}?text=1,{{$products->product_catogery}}" data-toggle="lightbox" data-title="{{$products->product_name}} <P>{{$products->product_catogery}}</P>">
                      <img src="{{ asset('uploads/'.$products->product_image) }}?$products->juice" class="img-fluid mb-2" alt="white sample" style="height:150px; width:200px;" />
                      
                    </a>
                  </div>
                  @elseif($products->tea)
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="{{ asset('uploads/'.$products->product_image) }}?text=2" data-toggle="lightbox" data-title="{{$products->product_name}} <div>{{$products->product_catogery}}</div>">
                      <img src="{{ asset('uploads/'.$products->product_image) }}?text=2" class="img-fluid mb-2" alt="black sample" style="height:150px; width:200px;"/>
                    </a>
                  </div> 

                  @elseif($products->coffee)
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="{{ asset('uploads/'.$products->product_image) }}?text=4" data-toggle="lightbox" data-title="{{$products->product_name}} <div>{{$products->product_catogery}}</div>">
                      <img src="{{ asset('uploads/'.$products->product_image) }}?text=4" class="img-fluid mb-2" alt="red sample" style="height:150px; width:200px;"/>
                    </a>
                  </div>

                  @else
                  <!-- <span>No image found!</span> -->
                  @endif
                  @endif
                  @endforeach
<?php

                  }
                  }  ?>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">Ekko Lightbox</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div><!-- /.container-fluid -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection