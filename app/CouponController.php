<?php

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        //NO SE SI FUNCIONA MARIO, EN POSTMAN ME DA ERROR ESTE
        case 'create_coupon':
            $code = $_POST['code'];
            $discount = $_POST['discount'];
            $expiration_date = $_POST['expiration_date'];

            $couponController = new CouponController();
            $couponController->createCoupon($code, $discount, $expiration_date);
            break;

        case 'update_coupon':
            $id = $_POST['id'];
            $code = $_POST['code'];
            $discount = $_POST['discount'];
            $expiration_date = $_POST['expiration_date'];

            $couponController = new CouponController();
            $couponController->updateCoupon($id, $code, $discount, $expiration_date);
            break;

        case 'delete_coupon':
            $id = $_POST['id'];

            $couponController = new CouponController();
            $couponController->deleteCoupon($id);
            break;
    }
}

class CouponController {

    public function getAllCoupons() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
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

        if (isset($response->data) && count($response->data)) {
            return $response->data;
        }

        return array();
    }

    public function getCoupon($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/coupons/$id",
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

        if (isset($response->data) && !is_null($response->data)) {
            return $response->data;
        }

        return null;
    }

    //NO SE SI FUNCIONA MARIO, EN POSTMAN ME DA ERROR ESTE
    public function createCoupon($code, $discount, $expiration_date) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'code' => $code,
                'discount' => $discount,
                'expiration_date' => $expiration_date,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/coupons?status=created');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/coupons?status=error');
        }
    }

    public function updateCoupon($id, $code, $discount, $expiration_date) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 
                "id=$id" .
                "&code=$code" .
                "&discount=$discount" .
                "&expiration_date=$expiration_date",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'catalogs/coupons?status=updated');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/coupons?status=error');
        }
    }

    public function deleteCoupon($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/coupons/$id",
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
            header('Location: ' . BASE_PATH . 'catalogs/coupons?status=deleted');
        } else {
            header('Location: ' . BASE_PATH . 'catalogs/coupons?status=error');
        }
    }
}
