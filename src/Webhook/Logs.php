<?php
    namespace Selly\Webhook;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Logs {
        public function get($id) {
            return \Selly\Client::getRequest('webhooks/logs/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return \Selly\Client::getRequest('webhooks/logs', ['page' => $page, 'per_page' => $per_page]);
        }
    }
?>