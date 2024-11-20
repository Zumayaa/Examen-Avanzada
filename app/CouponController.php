<?php

var_dump($_POST);
require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        //NO SE SI FUNCIONA MARIO, EN POSTMAN ME DA ERROR ESTE
    case 'create_coupon':
        $name = $_POST['name'];
        $code = $_POST['code'];
        $percentage_discount = $_POST['percentage_discount'];
        $min_amount_required = $_POST['min_amount_required'];
        $min_product_required = $_POST['min_product_required'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $max_uses = $_POST['max_uses'];
        $valid_only_first_purchase = $_POST['valid_only_first_purchase'];

        $couponController = new CouponController();
        $couponController->createCoupon($name,$code,$percentage_discount,$min_amount_required,$min_product_required,$start_date,$end_date,$max_uses,$valid_only_first_purchase);
        break;


        case 'update_coupon':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $code = $_POST['code'];
            $percentage_discount = $_POST['percentage_discount'];
            $min_amount_required = $_POST['min_amount_required'];
            $min_product_required = $_POST['min_product_required'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $max_uses = $_POST['max_uses'];
            $count_uses = $_POST['count_uses'];
            $valid_only_first_purchase = $_POST['valid_only_first_purchase'];
            $status = $_POST['status'];
        
            $couponController = new CouponController();
            $couponController->updateCoupon($id,$name,$code,$percentage_discount,$min_amount_required,$min_product_required,$start_date,$end_date,$max_uses,$count_uses,$valid_only_first_purchase,$status);
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

    public function createCoupon($name,$code,$percentage_discount,$min_amount_required,$min_product_required,$start_date,$end_date,$max_uses,$valid_only_first_purchase) {
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
                'name' => $name,
                'code' => $code,
                'percentage_discount' => $percentage_discount,
                'min_amount_required' => $min_amount_required,
                'min_product_required' => $min_product_required,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'max_uses' => $max_uses,
                'count_uses' => 0, 
                'valid_only_first_purchase' => $valid_only_first_purchase,
                'status' => '1' 
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));
    
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'coupons/coupons?status=created');
        } else {
            header('Location: ' . BASE_PATH . 'coupons/coupons?status=error');
        }
    }
    

    public function updateCoupon($id, $name, $code, $percentage_discount, $min_amount_required, $min_product_required, $start_date, $end_date, $max_uses, $count_uses, $valid_only_first_purchase, $status) {
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
                "&name=$name" .
                "&code=$code" .
                "&percentage_discount=$percentage_discount" .
                "&min_amount_required=$min_amount_required" .
                "&min_product_required=$min_product_required" .
                "&start_date=$start_date" .
                "&end_date=$end_date" .
                "&max_uses=$max_uses" .
                "&count_uses=$count_uses" .
                "&valid_only_first_purchase=$valid_only_first_purchase" .
                "&status=$status",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));
    
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'coupons/coupons?status=updated');
        } else {
            header('Location: ' . BASE_PATH . 'coupons/coupons?status=error');
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
            header('Location: ' . BASE_PATH . 'coupons/coupons?status=deleted');
        } else {
            header('Location: ' . BASE_PATH . 'coupons/coupons?status=error');
        }
    }
}