<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>


                    <script type="text/javascript">
                        function check(isSeller){
                            if(isSeller=="on"){
                                document.getElementsByName("isSeller")[0].setAttribute("checked","true");
                            }
                            else
                            {
                                document.getElementsByName("isSeller")[0].removeAttribute("checked");
                            }

                        }
                        function disable(checkboxElem) {
                            if (checkboxElem.checked) {
                            document.getElementsByName("address")[0].removeAttribute("disabled");
                            document.getElementsByName("legalName")[0].removeAttribute("disabled");
                            } else {
                            document.getElementsByName("address")[0].setAttribute("disabled","false");
                            document.getElementsByName("legalName")[0].setAttribute("disabled","false");
                                 }
                            }
                        


                    </script>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Регистрация на сайте</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            
                            <input type="checkbox" name="isSeller" onchange="disable(this)" /> Я хочу продавать на Амбаре
                            <input type="text"  name="legalName" placeholder="Юридическое имя" disabled value="<?php echo $legalName; ?>"/>
                            <input type="text"  name="address" placeholder="Адрес компании" disabled value="<?php echo $address; ?>"/>
                            <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
                        </form>
                    </div><!--/sign up form-->     
                <?php endif; ?>
                    <script type="text/javascript">
                            check("<?php echo $isSeller ?>");
                            disable(document.getElementsByName("isSeller")[0]);
                    </script>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>