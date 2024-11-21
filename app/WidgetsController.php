<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'config.php';

class WidgetsController {

    //total de compras por cliente
    public function getTotalPurchasesByClient($clientId) {
        $orders = $this->getAllOrders();

        if (!$orders || !isset($orders->data)) {
            return 0;
        }

        $totalPurchases = 0;

        foreach ($orders->data as $order) {
            if ($order->client_id == $clientId) {
                $totalPurchases += $order->total;
            }
        }

        return $totalPurchases;
    }

    //total de ordenes por cliente
    public function getOrderCountByClient($clientId) {
        $orders = $this->getAllOrders();

        if (!$orders || !isset($orders->data)) {
            return 0; //si no hay ordenes o no se pudo obtener datos, retorna 0
        }

        $orderCount = 0;

        foreach ($orders->data as $order) {
            if ($order->client_id == $clientId) {
                $orderCount++;
            }
        }

        return $orderCount;
    }

    //cant de cupon usado
    public function getCouponUsageCount() {
        $orders = $this->getAllOrders();

        if (!$orders || !isset($orders->data)) {
            return 0;
        }

        $couponUsageCount = [];

        foreach ($orders->data as $order) {
            if (isset($order->coupon_id) && $order->coupon_id > 0) {
                if (!isset($couponUsageCount[$order->coupon_id])) {
                    $couponUsageCount[$order->coupon_id] = 0;
                }
                $couponUsageCount[$order->coupon_id]++;
            }
        }

        return $couponUsageCount;
    }

    private function getAllOrders() {
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

        return json_decode($response);
    }
}
?>
