<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Coupons {
        public function get($id) {
            return Client::getRequest('coupons/'.$id);
        }

        public function list() {
            return Client::getRequest('coupons');
        }

        public function create($params) {
            return Client::postRequest('coupons', $params);
        }
    }
?>