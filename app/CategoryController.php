<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        
        case 'create_category':
            $name = $_POST['name'];
            $description = $_POST['description'];
            $slug = $_POST['slug'];
            $categoryId = $_POST['category_id'];

            $categoryController = new CategoryController();
            $categoryController->createCategory($name, $description, $slug, $categoryId);
        break;

        case 'update_category':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $slug = $_POST['slug'];
            $categoryId = $_POST['category_id'];

            $categoryController = new CategoryController();
            $categoryController->updateCategory($id, $name, $description, $slug, $categoryId);
        break;

        case 'delete_category':
            $id = $_POST['id'];

            $categoryController = new CategoryController();
            $categoryController->deleteCategory($id);
        break;
    }
}

class CategoryController {

    public function getAllCategories() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->data)) {
            return $response->data;
        }

        return null; 
    }

    public function createCategory($name, $description, $slug, $category_id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'description' => $description,
                'slug' => $slug,
                'category_id' => $category_id
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        //PLEBES NO SE SI ESTAN BIEN LAS RUTAS DE ESTE AYUDA
        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/categories?status=createdAddress');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/categories?status=error');
        }
    }

    public function getCategoryById($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/categories/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->data)) {
            return $response->data; 
        }

        return null;
    }
    

    public function updateCategory($id, $name, $description, $slug, $category_id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => http_build_query(array(
                'id' => $id,
                'name' => $name,
                'description' => $description,
                'slug' => $slug,
                'category_id' => $category_id
            )),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        //PLEBES NO SE SI ESTAN BIEN LAS RUTAS DE ESTE AYUDA
        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/categories?status=updatedAddress');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/categories?status=error');
        }
    }

    public function deleteCategory($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/categories/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        //PLEBES NO SE SI ESTAN BIEN LAS RUTAS DE ESTE AYUDA
        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/categories?status=deletedAddress');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/categories?status=error');
        }
    }
}
