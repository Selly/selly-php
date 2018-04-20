<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Products {
        public function get($id) {
            return Client::getRequest('products/'.$id);
        }

        public function list() {
            return Client::getRequest('products');
        }

        public function create($params) {
            return Client::postRequest('products', ['product' => $params]);
        }
    }
?>