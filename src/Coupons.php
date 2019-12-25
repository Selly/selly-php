<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Coupons {
        public function get($id) {
            return Client::getRequest('coupons/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return Client::getRequest('coupons', ['page' => $page, 'per_page' => $per_page]);
        }

        public function create($params) {
            return Client::postRequest('coupons', ['coupons' => $params]);
        }

        public function update($id, $params) {
            return Client::putRequest('coupons/'.$id, ['coupons' => $params]);
        }
    }
?>