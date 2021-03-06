<?php
$food = $data['food'];
$relatedFood = $data['relatedFood'];
?>
<div class="page-container">
  <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
    <div class="container">
      <div class="title-wrapper">
        <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Product Single</div>
        <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
        <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We hope you will like this product and give us 5 star rating</div>
      </div>
    </div>
  </div>
  <div class="page-content-wrapper">
    <div class="container">
      <section class="product-single padding-top-100 padding-bottom-100">
        <div class="row">
          <div class="col-md-6">
            <div class="product-image">
              <div class="product-featured-image">
                <div class="main-slider">
                  <div class="slides">
                    <div class="featured-image-item">
                      <img style="height:350px" src="public/source/assets/images/hinh_mon_an/<?=$food->image?>" alt="fooday" class="img img-responsive"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-summary">
              <div class="product-title">
                <div class="title"><?=$food->name?></div>
              </div>
              <div class="product-price">
                <div class="price"><?=number_format($food->price)?><span class="currency-symbol">vnđ</span></div>
              </div>
              <div class="product-desc" style="margin-top:50px">
                <?=$food->detail?>
              </div>
              <div class="product-quanlity">
              <input type="hidden"  value="<?=$food->id?>" class="idFood" >
              <form action="#">
                  <div class="input-group">
                    <input type="text" name="quanlity" placeholder="" value="1" class="form-control txtQty" >
                    <a href="javascript:void(0)" class="quanlity-plus">
                      <i class="fa fa-plus"></i>
                    </a>
                    <a href="javascript:void(0)" class="quanlity-minus">
                      <i class="fa fa-minus"></i>
                    </a>
                  </div>
                  <div class="add-to-cart">
                    <a href="javascript:void(0)" class="swin-btn"> 
                    <span>Add To Cart</span></a></div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section class="product-related padding-bottom-100">
        <div class="swin-sc swin-sc-title style-2">
          <p class="title"><span>Món ăn cùng loại</span></p>
        </div>
        <div class="swin-sc swin-sc-product products-02 carousel-01 woocommerce">
          <div class="products nav-slider">

          <?php foreach($relatedFood as $food):?>
            <div class="blog-item item swin-transition">
              <div class="block-img">
                <img style="height:300px" src="public/source/assets/images/hinh_mon_an/<?=$food->image?>" alt="" class="img img-responsive">
                <div class="block-circle price-wrapper">
                  <span class="price woocommerce-Price-amount amount">
                    <?=number_format($food->price)?>
                    <span class="price-symbol">vnđ</span>
                  </span>
                </div>
                <div class="group-btn">
                <a href="javascript:void(0)" class="swin-btn btn-link">
                <i class="icons fa fa-link"></i></a>
                <a href="javascript:void(0)" class="swin-btn btn-add-to-card" dataId="<?=$food->id?>" >
                <i class="fa fa-shopping-basket"></i></a></div>
              </div>
              <div class="block-content">
                <h5 class="title"><a href="javascript:void(0)"><?=$food->name?></a></h5>
              </div>
            </div>
          <?php endforeach?>
          </div>
        </div>
      </section>

    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('.txtQty').on('keyup',function(){
      var q = $(this).val();
      if(isNaN(q)){
        alert('Vui lòng nhập số')
      }
    })
    $('.add-to-cart').click(function(){
      //console.log(1234)
      var qty = parseInt($('.txtQty').val());
      var idFood = $('.idFood').val();
      
        // console.log(qty)
        // console.log(idFood)
        ajaxAddCart(qty,idFood)

    })

  })
</script>