<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            
                            <p>Пароль:</p>

                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <?php $userId = User::checkLogged();

                              $user = User::getUserById($userId); 
                              if(strlen($user['role'])>0){ ?>

                            <p>Юридическое имя:</p>
                            <input type="text"  name="legalName" placeholder="Юридическое имя" disabled value="<?php echo $user['legal_name']; ?>"/>
                            
                            <p>Адрес компании:</p>
                            <input type="text"  name="address" placeholder="Адрес компании" disabled value="<?php echo $user['address']; ?>"/>
                            <br/>

                        <?php } else {echo "<a href=\"/cabinet/seller\"  class=\"hochu\">Я хочу продавать на Амбаре</a>"; } ?>

                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />


                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>