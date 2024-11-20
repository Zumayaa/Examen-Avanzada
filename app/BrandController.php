<?php

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        
      case 'create_brand':
        $name = $_POST['name'];
        $description = $_POST['description'];
        $slug = $_POST['slug'];

        $brandController = new BrandController();
        $brandController->createBrand($name, $description, $slug);
      break;

      case 'update_brand':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $slug = $_POST['slug'];

        $brandController = new BrandController();
        $brandController->updateBrand($id, $name, $description, $slug);
      break;

      case 'delete_brand':
        $id = $_POST['id'];

        $brandController = new BrandController();
        $brandController->deleteBrand($id);
      break;

    }
}

class BrandController {

  function get() {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
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
    $res_json = json_decode($response);
    curl_close($curl);
    if ($res_json->code == 4) {
      return $res_json->data;
    }

    return [];
  }

  function getById($id) {
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/' . $id,
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
    
    $decodedResponse = json_decode($response);
    return $decodedResponse ? $decodedResponse->data : null;
    
  }

  public function createBrand($name, $description, $slug) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
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
            'slug' => $slug
      ),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['user_data']->token
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);

    if (isset($response->code) && $response->code == 4) {
      header('Location: ' . BASE_PATH . 'catalogs/brands?status=created');
    } else {
      header('Location: ' . BASE_PATH . 'catalogs/brands?status=error');
    }

  }

  public function updateBrand($id, $name, $description, $slug) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => 
            "id=$id" .
            "&name=$name" .
            "&description=$description" .
            "&slug=$slug",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $_SESSION['user_data']->token
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);

    if (isset($response->code) && $response->code == 4) {
      header('Location: ' . BASE_PATH . 'catalogs/brands?status=updated');
    } else {
      header('Location: ' . BASE_PATH . 'catalogs/brands?status=error');
    }

  }

  public function deleteBrand($id) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://crud.jonathansoto.mx/api/brands/$id",
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

    if (isset($response->code) && $response->code == 4) {
        header('Location: ' . BASE_PATH . 'catalogs/brands?status=deleted');
    } else {
        header('Location: ' . BASE_PATH . 'catalogs/brands?status=error');
    }
  }
}