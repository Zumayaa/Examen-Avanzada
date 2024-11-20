<?php

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        
        case 'create_tag':
            $name = $_POST['name'];
            $description = $_POST['description'];
            $slug = $_POST['slug'];

            $tagController = new TagController();
            $tagController->createTag($name, $description, $slug);
        break;

        case 'update_tag':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $slug = $_POST['slug'];

            $tagController = new TagController();
            $tagController->updateTag($id, $name, $description, $slug);
        break;

        case 'delete_tag':
            $id = $_POST['id'];

            $tagController = new TagController();
            $tagController->deleteTag($id);
        break;
    }
}

class TagController {

    public function getAllTags() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
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

        echo $response;
    }

    public function getTag($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/tags/$id",
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

        echo $response;
    }

    public function createTag($name, $description, $slug) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
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
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        echo $response;
    }

    public function updateTag($id, $name, $description, $slug) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
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
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        echo $response;
    }

    public function deleteTag($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/tags/$id",
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

        echo $response;
    }
}