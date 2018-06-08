<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                     <?php
        
                                         $userId = User::checkLogged();
                                         $user = User::getUserById($userId);
                                        if($user['role']=='admin'){

                                          ?>
                    <li><a href="/admin">Админпанель</a></li>
                <?php }  ?>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Удалить товар</li>
                </ol>
            </div>


            <h4>Удалить товар #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить этот товар?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

