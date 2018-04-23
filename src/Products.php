<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Products {
        public function get($id) {
            return Client::getRequest('products/'.$id);
        }

        public function list($page) {
            return Client::getRequest('products', ['page' => $page]);
        }

        public function create($params) {
            return Client::postRequest('products', ['product' => $params]);
        }

        public function update($id, $params) {
            return Client::putRequest('products/'.$id, ['product' => $params]);
        }
    }
?>