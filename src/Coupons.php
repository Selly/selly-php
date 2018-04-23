<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Coupons {
        public function get($id) {
            return Client::getRequest('coupons/'.$id);
        }

        public function list($page) {
            return Client::getRequest('coupons', ['page' => $page]);
        }

        public function create($params) {
            return Client::postRequest('coupons', $params);
        }

        public function update($id, $params) {
            return Client::putRequest('coupons/'.$id, $params);
        }
    }
?>