<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для страницы просмотра товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);

                if(isset($_POST['comment'])){
                    if(strlen($_POST['comment'])==0)
                    {
                        $message="Комментарий должен быть не пустой";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    else{

                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    $options;
                    $options['product_id'] = $product['id'];
                    $options['user_id'] = $user['id'];
                    $options['text'] = $_POST['comment'];
                    $options['post_date'] = date("Y-m-d H:i:s");

                    $result = Product::createComment($options);
                   }
                }

        $comments = Product::getCommentsById($productId);


        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

}
