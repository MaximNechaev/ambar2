<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
            
                                        <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="signup-form"><!--sign up form-->
                        <h2>Стать продавцом</h2>
                        <form action="#" method="post">
                            <p>Юридическое имя:</p>
                            <input type="text" name="legalName" placeholder="Юридическое имя" value="<?php echo $legalName; ?>"/>
                            
                            <p>Адрес компании:</p>

                            <input type="text" name="address" placeholder="Адрес компании" value="<?php echo $address; ?>"/>
                            

                            <input type="submit" name="submit" class="btn btn-default" value="Подтвердить" />


                        </form>
                    </div><!--/sign up form-->
                
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>