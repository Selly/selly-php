<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Domains {
        public function get($id) {
            return Client::getRequest('domains/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return Client::getRequest('domains', ['page' => $page, 'per_page' => $per_page]);
        }

        public function create($params) {
            return Client::postRequest('domains', $params);
        }

        public function destroy($id, $params = []) {
            return Client::deleteRequest('domains/'.$id, $params);
        }
    }
?>