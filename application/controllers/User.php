<?php 
class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function AddToCart($proID){
        // $cart_products = $this->session->userdata('cart_products');
        // $cart_products[] = $proID;
        // $this->session->set_userdata('cart_products', $cart_products);
        // redirect($_SERVER['HTTP_REFERER']);    
        $product = $this->Order_model->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['Id'],
            'qty'    => 1,
            'price'    => $product['Price'],
            'name'    => $product['Item_Name'],

        );
        $this->cart->insert($data);
        
        // Redirect to the cart page

        redirect('Order/OrderDetail/'.$product['Restaurant_Id']);
    }
  
}
?>