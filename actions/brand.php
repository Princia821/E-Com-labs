<?php

require('../controllers/product_controller.php');

// check if there is a POST variable with the name 'addbrand'
if(isset($_POST['addbrand'])){
    // retrieve the brand name from the form
    $name = $_POST['brandname'];
   
    // call the add_brand_controller function
    $result = add_brand_ctr($name);

    if($result === true) 
    echo "Brand added Successfully";
    else 
    echo "Insertion Failed"; 

}


//delete Brand
if(isset($_GET['deleteBrandID'])){

    $id = $_GET['deleteBrandID'];

    // call the function
    $result = delete_brand_ctr($id);
    
    if($result === true){
        header("Location: ../admin/add_brand.php");
    }
    else {echo "deletion failed";
    }

}

// Update Brand
if(isset($_POST['editbrand'])){
    // retrieve the name from the form submission
    $name = $_POST['name'];
    $id = $_POST['id']; 

    // call the edit_brand_controller function 
    $result = edit_brand_ctr($id, $name);

    if($result === true){
        header("Location: ../admin/add_brand.php");
    }
    else echo "update failed";

}

?>