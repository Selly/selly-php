<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Queries {
        public function get($id) {
            return Client::getRequest('queries/'.$id);
        }

        public function list() {
            return Client::getRequest('queries/');
        }
    }
?>