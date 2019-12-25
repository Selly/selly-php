<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Categories {
        public function get($id) {
            return Client::getRequest('categories/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return Client::getRequest('categories', ['page' => $page, 'per_page' => $per_page]);
        }

        public function create($params) {
            return Client::postRequest('categories', $params);
        }

        public function update($id, $params) {
            return Client::putRequest('categories/'.$id, $params);
        }
    }
?>