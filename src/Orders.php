<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Orders {
        public function get($id) {
            return Client::getRequest('orders/'.$id);
        }

        public function list($page = 1, $per_page = 20) {
            return Client::getRequest('orders/', ['page' => $page, 'per_page' => $per_page]);
        }
    }
?>