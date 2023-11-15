$action = filter_input(INPUT_POST, 'action');
if($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL){
        $action = 'list_products';
    }
}
switch ($action){
    case 'list_products':
        $category_id = filter_input(INPUT_GET, 'category_id',
        FILTER_VALIDATE_INT);
        if($category_id == NULL || $category_id == FALSE){
            $category_id = 1;
        }
        $category_nam = get_category_name($category_id);
        $categories = get_category_name($category_id);\
        $products = get_products_by_category($category_id);
        include('product_list.php');
        break;
    case 'delete_product':
        $product_id = filter_input(INPUT_POST, 'product_id',
        FILTER_VALIDATE_INT);
        $category_id =filter_input(INPUT_POST, 'category_id',
        FILTER_VALIDATE_INT);
        if($category_id == NULL || $category_id == FALSE){
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
        }else{
            delete_product($product_id);
            header("Location: .?category_id=$category_id");
        }
        break;
    case 'show_add_form':
        $categories = get_categories();
        include('product_add.php');
        break;
    case 'add_product':
        $category_id = filter_input(INPUT_POST, 'category_id',
        FILTER_VALIDATE_INT);
        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_PST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        if($category_id == NULL || $category_id == FALSE || $code == NULL ||
        $name == NULL || $price == NULL || $price == FALSE){
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
        }else{
            add_product($category_id, $code, $name, $price);
            header("Location: .?category_id=$category_id");
        }
        break;
        }
}