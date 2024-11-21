<?php

require_once 'config.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'create_order':
            $folio = $_POST['folio'];
            $total = $_POST['total'];
            $is_paid = $_POST['is_paid'];
            $client_id = $_POST['client_id'];
            $address_id = $_POST['address_id'];
            $order_status_id = $_POST['order_status_id'];
            $payment_type_id = $_POST['payment_type_id'];
            $coupon_id = $_POST['coupon_id'];
            $presentations = $_POST['presentations']; //noce si sea en un array VALE?

            $orderController = new OrderController();
            $orderController->createOrder($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id, $presentations);
            break;

        case 'update_order':
            $id = $_POST['id'];
            $order_status_id = $_POST['order_status_id'];

            $orderController = new OrderController();
            $orderController->updateOrder($id, $order_status_id);
            break;

        case 'delete_order':
            $id = $_POST['id'];

            $orderController = new OrderController();
            $orderController->deleteOrder($id);
            break;
    }
}

class OrderController {

    public function getAllOrders() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
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

    public function getOrdersBetweenDates($start_date, $end_date) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/orders/$start_date/$end_date",
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

    public function getOrder($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/orders/details/$id",
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

    public function createOrder($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id, $presentations) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'folio' => $folio,
                'total' => $total,
                'is_paid' => $is_paid,
                'client_id' => $client_id,
                'address_id' => $address_id,
                'order_status_id' => $order_status_id,
                'payment_type_id' => $payment_type_id,
                'coupon_id' => $coupon_id,
                'presentations' => json_encode($presentations), //aqui de array a json MARIO
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'orders?status=created');
        } else {
            header('Location: ' . BASE_PATH . 'orders?status=error');
        }
    }

    public function updateOrder($id, $order_status_id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 
                "id=$id" .
                "&order_status_id=$order_status_id",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code == 4) {
            header('Location: ' . BASE_PATH . 'orders?status=updated');
        } else {
            header('Location: ' . BASE_PATH . 'orders?status=error');
        }
    }

    public function deleteOrder($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://crud.jonathansoto.mx/api/orders/$id",
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
            header('Location: ' . BASE_PATH . 'orders?status=deleted');
        } else {
            header('Location: ' . BASE_PATH . 'orders?status=error');
        }
    }
}
