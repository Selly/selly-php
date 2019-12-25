<?php
    namespace Selly\Webhook;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Endpoints {
        public function get($id) {
            return \Selly\Client::getRequest('webhooks/endpoints/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return \Selly\Client::getRequest('webhooks/endpoints', ['page' => $page, 'per_page' => $per_page]);
        }

        public function create($params) {
            return \Selly\Client::postRequest('webhooks/endpoints', $params);
        }

        public function update($id, $params) {
            return \Selly\Client::putRequest('webhooks/endpoints/'.$id, $params);
        }

        public function destroy($id, $params = []) {
            return \Selly\Client::deleteRequest('webhooks/endpoints/'.$id, $params);
        }
    }
?>