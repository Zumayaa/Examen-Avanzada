<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'create_presentation':
            $description = $_POST['description'];
            $code = $_POST['code'];
            $weight = $_POST['weight'];
            $status = $_POST['status'];
            $stock = $_POST['stock'];
            $stockMin = $_POST['stock_min'];
            $stockMax = $_POST['stock_max'];
            $productId = $_POST['product_id'];
            $amount = $_POST['amount'];
            $cover = $_FILES['cover']['tmp_name'] ?? null;

            $presentationController = new PresentationController();
            $presentationController->createPresentation($description, $code, $weight, $status, $cover, $stock, $stockMin, $stockMax, $productId, $amount);
        break;

        case 'update_presentation':
            $presentationId = $_POST['presentation_id'];
            $description = $_POST['description'];
            $code = $_POST['code'];
            $weight = $_POST['weight'];
            $status = $_POST['status'];
            $stock = $_POST['stock'];
            $stockMin = $_POST['stock_min'];
            $stockMax = $_POST['stock_max'];
            $productId = $_POST['product_id'];
            $amount = $_POST['amount'];

            $presentationController = new PresentationController();
            $presentationController->updatePresentation($presentationId, $description, $code, $weight, $status, $stock, $stockMin, $stockMax, $productId, $amount);
        break;

        case 'delete_presentation':
            $presentationId = $_POST['presentation_id'];

            $presentationController = new PresentationController();
            $presentationController->deletePresentation($presentationId);
        break;

        case 'update_price':
            $presentationId = $_POST['presentation_id'];
            $newAmount = $_POST['amount'];

            $presentationController = new PresentationController();
            $presentationController->updatePrice($presentationId, $newAmount);
        break;
    }
}

class PresentationController {

    public function getPresentationsOfProduct($productId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/product/' . $productId,
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

    public function getSpecificPresentation($presentationId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/' . $presentationId,
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

    public function createPresentation($description, $code, $weight, $status, $cover, $stock, $stockMin, $stockMax, $productId, $amount) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'description' => $description,
                'code' => $code,
                'weight_in_grams' => $weight,
                'status' => $status,
                'cover' => new CURLFile($cover),
                'stock' => $stock,
                'stock_min' => $stockMin,
                'stock_max' => $stockMax,
                'product_id' => $productId,
                'amount' => $amount,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'presentation?status=created');
        } else {
            header('Location: ' . BASE_PATH . 'presentation?status=error');
        }
    }

    public function updatePresentation($presentationId, $description, $code, $weight, $status, $stock, $stockMin, $stockMax, $productId, $amount) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 
                "id=$presentationId" .
                "&description=$description" .
                "&code=$code" .
                "&weight_in_grams=$weight" .
                "&status=$status" .
                "&stock=$stock" .
                "&stock_min=$stockMin" .
                "&stock_max=$stockMax" .
                "&product_id=$productId" .
                "&amount=$amount",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'presentation?status=updated');
        } else {
            header('Location: ' . BASE_PATH . 'presentation?status=error');
        }
    }

    public function deletePresentation($presentationId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/' . $presentationId,
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
            header('Location: ' . BASE_PATH . 'presentation?status=deleted');
        } else {
            header('Location: ' . BASE_PATH . 'presentation?status=error');
        }
    }

    public function updatePrice($presentationId, $newAmount) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/set_new_price',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => http_build_query(array(
                'id' => $presentationId,
                'amount' => $newAmount
            )),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'presentation?status=updatedPrice');
        } else {
            header('Location: ' . BASE_PATH . 'presentation?status=error');
        }
    }
}
?>