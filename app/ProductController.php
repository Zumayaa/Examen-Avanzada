<?php 
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'create_product':
            $nombre = $_POST['nombre'];
            $slug = $_POST['slug'];
            $description = $_POST['description'];
            $features = $_POST['features'];
            $brand_id = $_POST['brand_id'];
            $categories = $_POST['categories'];
            $tags = $_POST['tags']; 
            $cover = $_FILES['cover']; 
            $productController = new ProductController();
            $productController->create($nombre, $slug, $description, $features, $brand_id, $categories, $tags, $cover);
        break;

		// NORMALON
        // case 'update_product':
        //     $nombre = $_POST['nombre'];
        //     $slug = $_POST['slug'];
        //     $description = $_POST['description'];
        //     $features = $_POST['features'];
        //     $brand_id = $_POST['brand_id'];
        //     $categories = $_POST['categories']; 
        //     $tags = $_POST['tags'];
        //     $product_id = $_POST['product_id'];
        //     $productController = new ProductController();
        //     $productController->update($nombre, $slug, $description, $features, $brand_id, $categories, $tags, $product_id);
        // break;

		//EXOTICON, NO SE SI FUNCIONA MARIO
		case 'update_product':
			$nombre = $_POST['nombre'];
			$slug = $_POST['slug'];
			$description = $_POST['description'];
			$features = $_POST['features'];
			$brand_id = $_POST['brand_id'];
			$categories = isset($_POST['categories']) ? $_POST['categories'] : []; 
			$tags = isset($_POST['tags']) ? $_POST['tags'] : [];
			$product_id = $_POST['product_id'];
		
			$productController = new ProductController();
			$productController->update($nombre, $slug, $description, $features, $brand_id, $categories, $tags, $product_id);
		break;
		
        case 'delete_product':
            $product_id = $_POST['product_id'];
            $productController = new ProductController();
            $productController->remove($product_id);
        break;
    }
}

class ProductController {

    public function get() { 
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl); 
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->data) && count($response->data)) {
            return $response->data;
        }

        return array();
    }

    public function getBySlug($slug) { 
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/slug/' . $slug,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl); 
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->data) && !is_null($response->data)) {
            return $response->data;
        }

        return null;
    }

    public function getById($product_id) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/' . $product_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl); 
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->data) && !is_null($response->data)) {
            return $response->data;
        }

        return null;
    }

    public function getByCategorySlug($category_slug) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/categories/' . $category_slug,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl); 
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->data) && count($response->data)) {
            return $response->data;
        }

        return array();
    }

    public function create($nombre, $slug, $description, $features, $brand_id, $categories, $tags, $cover) {
        
		$curl = curl_init();

        $postFields = [
            'name' => $nombre,
            'slug' => $slug,
            'description' => $description,
            'features' => $features,
            'brand_id' => $brand_id,
            'cover' => new CURLFILE($cover['tmp_name'], $cover['type'], $cover['name']),
        ];

        foreach ($categories as $index => $category) {
            $postFields["categories[$index]"] = $category;
        }
        foreach ($tags as $index => $tag) {
            $postFields["tags[$index]"] = $tag;
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postFields,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'products?status=ok');
        } else {
            header('Location: ' . BASE_PATH . 'products?status=error');
        }
    }

    public function update($nombre, $slug, $description, $features, $brand_id, $categories, $tags, $product_id){
        $curl = curl_init();
    
        $categoriesStr = implode('&', array_map(function($category) {
            return "categories[]=" . urlencode($category);
        }, $categories));
    
        $tagsStr = implode('&', array_map(function($tag) {
            return "tags[]=" . urlencode($tag);
        }, $tags));
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products', 
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',  
            CURLOPT_POSTFIELDS => 
                "id=$product_id" . 
                "&name=$nombre" . 
                "&slug=$slug" . 
                "&description=$description" . 
                "&features=$features" . 
                "&brand_id=$brand_id" . 
                "&$categoriesStr" .  
                "&$tagsStr",  
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,  
            ),
        ));
    
        $response = curl_exec($curl);
    
        if($response === false) {
            echo 'Curl error: ' . curl_error($curl);
        } else {
            $response = json_decode($response);  
            var_dump($response); 
        }
    
        curl_close($curl);
    
        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'products?status=ok');
        } else {
            var_dump($response);  
            header('Location: ' . BASE_PATH . 'products?status=error');
        }
    }

    public function remove($product_id){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/' . $product_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        )); 

        $response = curl_exec($curl); 
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 2) {
            header('Location: ' . BASE_PATH . 'products?status=ok');
        } else {
            header('Location: ' . BASE_PATH . 'products?status=error');
        }
    }

}
?>