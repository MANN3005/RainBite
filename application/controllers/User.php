<?php 
class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function AddToCart($proID){
        
        $product = $this->Order_model->getRows($proID);
       
        // Add product to the cart
        $data = array(
            'id'    => $product['Id'],
            'qty'    => 1,
            'price'    => $product['Price'],
            'name'    => $product['Item_Name'],
            'preferred_id' => $product['Restaurant_Id'],
        );
        if ($this->cart->total() == 0){
        $this->cart->insert($data);
        $_SESSION['cart_restro'] = $product['Restaurant_Id'];
        }
        else if($product['Restaurant_Id']== $_SESSION['cart_restro']){
            
            $this->cart->insert($data);
            
        }
        // Redirect to the cart page
        echo "<pre>";
        
        redirect('Order/OrderDetail/'.$product['Restaurant_Id']);
    }
  
}
?>