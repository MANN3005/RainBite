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
        'Id'=>$product['Id'],
        'qty'=>1,
        'Price'=>$product['Price'],            
        'Name'=>$product['Item_Name'],
        );
        $this->cart->insert($data);
        // Redirect to the cart page
      

        redirect( 'refresh'); 
        
       
    }
  
}
?>