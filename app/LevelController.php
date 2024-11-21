<?php

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        
        case 'create_level':
            $name = $_POST['name'];
            $percentage_discount = $_POST['percentage_discount'];

            $levelController = new LevelController();
            $levelController->createLevel($name, $percentage_discount);
        break;

        case 'update_level':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $percentage_discount = $_POST['percentage_discount'];

            $levelController = new LevelController();
            $levelController->updateLevel($id, $name, $percentage_discount);
        break;

        case 'delete_level':
            $id = $_POST['id'];

            $levelController = new LevelController();
            $levelController->deleteLevel($id);
        break;
    }
}

class LevelController {

    public function getAllLevels() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels/',
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

        return isset($response->data) && count($response->data) ? $response->data : array();
    }

    public function getLevel($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/levels/$id",
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

        return isset($response->data) && !is_null($response->data) ? $response->data : null;
    }

    public function createLevel($name, $percentage_discount) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'percentage_discount' => $percentage_discount,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/levels?status=created');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/levels?status=error');
        }
    }

    public function updateLevel($id, $name, $percentage_discount) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
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
                "&percentage_discount=$percentage_discount",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/levels?status=updated');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/levels?status=error');
        }
    }

    public function deleteLevel($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/levels/$id",
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
            header('Location: ' . BASE_PATH . 'catalogs/levels?status=deleted');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/levels?status=error');
        }
    }
}
