<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Orders {
        public function get($id) {
            return Client::getRequest('orders/'.$id);
        }

        public function list() {
            return Client::getRequest('orders/');
        }
    }
?>