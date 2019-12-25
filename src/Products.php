<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Products {
        public function get($id) {
            return Client::getRequest('products/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return Client::getRequest('products', ['page' => $page, 'per_page' => $per_page]);
        }

        public function create($params) {
            return Client::postRequest('products', ['product' => $params]);
        }

        public function update($id, $params) {
            return Client::putRequest('products/'.$id, ['product' => $params]);
        }
    }
?>