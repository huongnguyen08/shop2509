<?php
include_once('model/CartModel.php');
include_once('controller/Cart.php');
session_start();

class CartController{
    public function addToCart(){
        //nhan tu ajax view chi tiet
        $qty = $_POST['soluong'];
        $id = $_POST['idSanpham'];

        //lay thong tin sp chuan bi them vao gio hang
        $model  = new CartModel;
        $food = $model->findFood($id);

        //them vao gio hang
        //lay thong tin gio hang truoc do
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : NULL;
        $cart = new Cart($oldCart);
        $cart->add($food, $qty);

        //luu gio hang vao session
        $_SESSION['cart'] = $cart;
        
        //print_r($_SESSION['cart']);
        //thong bao them thanh cong cho nguoi dung

    }
}

?>