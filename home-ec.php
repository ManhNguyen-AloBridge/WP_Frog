<?php

/*
	Template Name: Home EC
*/

?>
<?php
get_header(); ?>
<div class="home-page">
  <div class="main-content">
    <div class="home-page__title">
      <p class="home-page__title-main">桜木通り</p>
      <p class="home-page__title-sub m-0">群馬県高崎市宿大類町</p>
      <p class="home-page__title-sub m-0">群馬県高崎市宿大類町群馬県高崎市宿大類町</p>
    </div>

    <div class="home-page__choose-foods row m-0">
      <div class="food col-12 col-md-6">
        <img src="<?= get_template_child_directory() . '/assets/images/bento.jpg' ?>" alt="" class="food__image">
        <div class="food__detail">
          <div class="food__description">
            <p class="food__title">Cơm hộp</p>
            <p class="food__describe">Có thể chọn nhiều món bỏ vào hộp cơm,Có thể chọn nhiều món bỏ vào hộp cơm</p>
            <div class="food__btn-action">
              <a href="#" class="food__see-more">Xem thêm <i class="fa-solid fa-caret-right food__icon"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="food col-12 col-md-6">
        <img src="<?= get_template_child_directory() . '/assets/images/bento.jpg' ?>" alt="" class="food__image">
        <div class="food__detail">
          <div class="food__description">
            <p class="food__title">Cơm hộp</p>
            <p class="food__describe">Có thể chọn nhiều món bỏ vào hộp cơm,Có thể chọn nhiều món bỏ vào hộp cơm</p>
            <div class="food__btn-action">
              <a href="#" class="food__see-more">Xem thêm <i class="fa-solid fa-caret-right food__icon"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-page__guide d-none d-md-block">
      <p class="guide__top-title m-0">桜木通り桜木通り</p>
      <div class="guide row m-0">
        <div class="col-4 row m-0">
          <div class="col-6 ps-0">
            <img src="<?= get_template_child_directory() . '/assets/images/2020-three-quarters-1.png' ?>" alt="" class="guide__img">
          </div>
          <div class="col-6">
            <p class="guide__title">桜木通り</p>
            <p class="guide__describe">群馬県高崎市宿大類町群馬県高崎市宿大類町</p>
          </div>

        </div>
        <div class="col-4 row m-0">
          <div class="col-6 ps-0">
            <img src="<?= get_template_child_directory() . '/assets/images/2020-three-quarters-1.png' ?>" alt="" class="guide__img">
          </div>
          <div class="col-6">
            <p class="guide__title">桜木通り</p>
            <p class="guide__describe">群馬県高崎市宿大類町群馬県高崎市宿大類町</p>
          </div>

        </div>
        <div class="col-4 row m-0">
          <div class="col-6 ps-0">
            <img src="<?= get_template_child_directory() . '/assets/images/2020-three-quarters-1.png' ?>" alt="" class="guide__img">
          </div>
          <div class="col-6">
            <p class="guide__title">桜木通り</p>
            <p class="guide__describe">群馬県高崎市宿大類町群馬県高崎市宿大類町</p>
          </div>

        </div>

      </div>
    </div>
  </div>
</div><!-- .wrap -->
</div>
<?php
get_footer();
