<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Queries {
        public function get($id) {
            return Client::getRequest('queries/'.$id);
        }

        public function list($page = 1) {
            return Client::getRequest('queries/', ['page' => $page]);
        }
    }
?>