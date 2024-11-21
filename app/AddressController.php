<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        
        case 'create_address':
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $street = $_POST['street_and_use_number'];
            $postalCode = $_POST['postal_code'];
            $city = $_POST['city'];
            $province = $_POST['province'];
            $phone = $_POST['phone_number'];
            $isBilling = $_POST['is_billing_address'];
            $clientId = $_POST['client_id'];

            $addressController = new AddressController();
            $addressController->createAddress($firstName, $lastName, $street, $postalCode, $city, $province, $phone, $isBilling, $clientId);
        break;

        case 'update_address':
            $addressId = $_POST['address_id'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $street = $_POST['street_and_use_number'];
            $postalCode = $_POST['postal_code'];
            $city = $_POST['city'];
            $province = $_POST['province'];
            $phone = $_POST['phone_number'];
            $isBilling = $_POST['is_billing_address'];
            $clientId = $_POST['client_id'];

            $addressController = new AddressController();
            $addressController->updateAddress($addressId, $firstName, $lastName, $street, $postalCode, $city, $province, $phone, $isBilling, $clientId);
        break;

        case 'delete_address':
            $addressId = $_POST['address_id'];

            $addressController = new AddressController();
            $addressController->deleteAddress($addressId);
        break;
    }
}

class AddressController {

    public function getAddressByClient($clientId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/' . $clientId,
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
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
        curl_close($curl);
        $response = json_decode($response);

        if ($httpCode !== 200 || $response === null) {
            error_log("Error al obtener las direcciones. HTTP Code: $httpCode");
            return null;
        }

        if (isset($response->data)) {
            return is_array($response->data) ? $response->data : [$response->data];
        }

        return null;

    }

    public function createAddress($firstName, $lastName, $street, $postalCode, $city, $province, $phone, $isBilling, $clientId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'first_name' => $firstName,
                'last_name' => $lastName,
                'street_and_use_number' => $street,
                'postal_code' => $postalCode,
                'city' => $city,
                'province' => $province,
                'phone_number' => $phone,
                'is_billing_address' => $isBilling,
                'client_id' => $clientId,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'address?status=createdAddress');
        } else {
            header('Location: ' . BASE_PATH . 'address?status=error');
        }
    }

    public function updateAddress($addressId, $firstName, $lastName, $street, $postalCode, $city, $province, $phone, $isBilling, $clientId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 
                "id=$addressId" .
                "&first_name=$firstName" .
                "&last_name=$lastName" .
                "&street_and_use_number=$street" .
                "&postal_code=$postalCode" .
                "&city=$city" .
                "&province=$province" .
                "&phone_number=$phone" .
                "&is_billing_address=$isBilling" .
                "&client_id=$clientId",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'address?status=updatedAddress');
        } else {
            header('Location: ' . BASE_PATH . 'address?status=error');
        }
    }

    public function deleteAddress($addressId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/' . $addressId,
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
            header('Location: ' . BASE_PATH . 'address?status=deletedAddress');
        } else {
            header('Location: ' . BASE_PATH . 'address?status=error');
        }
    }
}
