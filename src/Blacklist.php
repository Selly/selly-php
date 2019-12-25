<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Blacklist {
        public function get($id) {
            return Client::getRequest('blacklist/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return Client::getRequest('blacklist', ['page' => $page, 'per_page' => $per_page]);
        }

        public function create($params) {
            return Client::postRequest('blacklist', $params);
        }

        public function update($id, $params) {
            return Client::putRequest('blacklist/'.$id, $params);
        }

        public function destroy($id, $params = []) {
            return Client::deleteRequest('blacklist/'.$id, $params);
        }
    }
?>