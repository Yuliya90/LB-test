<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;
    subset=cyrillic" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">

    <?php wp_head(); ?>

    <title>ПЭ LB-52U ГОСТ</title>
</head>
<body>
<div class="header">
    <span class="txt"><?php the_field('main-title');?></span>
    <button clicked class="hit" <?php the_field('hit');?>><img src="<?php echo get_template_directory_uri(); ?>/image/Icon.png"><span class="txt_hit">хит продаж</span></button>
</div>
<div class="main">
    <div class="price"><img class="price_img" src="<?php echo get_template_directory_uri(); ?>/image/price.png"><span class="txt_price"><?php the_field('price');?></span></div>
    <div class="diameter"><img class="diameter_img" src="<?php echo get_template_directory_uri(); ?>/image/diameter.svg"><span class="txt_diameter"><?php the_field('diameter');?></span></div>
    <div class="packaging"><img class="packaging_img" src="<?php echo get_template_directory_uri(); ?>/image/packaging.svg"><span class="txt_packaging"><?php the_field('packaging');?></span></div>
    <div class="type"><img class="type_img" src="<?php echo get_template_directory_uri(); ?>/image/type.png"><span class="txt_type"><?php the_field('type');?></span></div>
    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/image/img.png"></div>

<section class="btns">
    <button class="btn_price rt">от 107 ₽/кг</button>

    <button class="btn_diameter-1 rt">2,5 мм</button>
    <button class="btn_diameter-2 rt">3 мм</button>
    <button class="btn_diameter-3 rt">4 мм</button>
    <button class="btn_diameter-4 rt">5 мм</button>

    <button class="btn_packaging-1 rt">1 кг</button>
    <button class="btn_packaging-2 rt">1,5 кг</button>
    <button class="btn_packaging-3 rt">2,5 кг</button>
    <button class="btn_packaging-4 rt">5 кг</button>
</section>
<section class="mine_btn">
    <button class="mine"><span class="big">оформить заявку</span></button>
</section>


                 <!-- Форма обратной связи -->
                 <div class="overlay"> 
   <form class="contact-form" id="contact-form_1">
  <div class="title"><p class="contact-form__title">заявка на ПЭ LB-52U ГОСТ</p> <div class="popup-close"> &times;</div></div>

  <div class="contact-form__input">
    <input name="name" type="text" class="contact-form__input_name" placeholder="Имя">
  </div>
             
  <div class="contact-form__input">
    <input name="tel" type="tel" class="contact-form__input_tel" placeholder="Телефон">
  </div>
 
  <div class="contact-form__input"> 
     <input name="email" type="email" class="contact-form__input_email" placeholder="Email">
  </div>
 <p class="txt_check"><input class="check" type="checkbox" name="option" value="a" checked>Даю согласие на обработку персональных данных</p>
  <button class="contact-form__button" type="button"> Отправить </button>
</form>
</div>

</div>

    <script src="js/main.js" type="text/javascript"></script>
    <?php wp_footer(); ?>
</body>

</html>