<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p>Код товара: <?php echo $product['code']; ?></p>
                                <span>
                                    <span>US $<?php echo $product['price']; ?></span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                                <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5>Описание товара</h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">

                            <br/>
                            <h5>Отзывы</h5>
                            <?php if (isset($_SESSION['user'])){ ?>
                            <form class="formcomment" action="#" method="post">
                                <textarea  class="form-control rows="3" name="comment" placeholder="Напишите отзыв"></textarea>
                                <input type="submit" class="btn btn-primary" value="Оставить отзыв">
                            </form>    
                        <?php } else  echo "<a href=\"/user/login\" class=\"voydi\">Войдите</a>, чтобы оставить комментарий"; ?>
    
                            <?php foreach ($comments as $comment): ?>
                            <div class="comment">
                            <div class="name" display="inline-block"><?php print_r($comment['name']); 
                            if($product['seller_id']==$comment['user_id']){echo "<a class=\"green\"> [Продавец]</a>";}?>
                                
                            </div>
                            <div class="date"> <?php print_r($comment['post_date']); ?> </div>
                            <br><br>
                            <div class="text"> <?php print_r($comment['text']); ?> </div>
                            </div>
                        <br>
                <?php endforeach; ?>
                        </div>
                    </div>



                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>