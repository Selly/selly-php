<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Payments {
        public function create($params) {
            return Client::postRequest('pay', $params);
        }
    }
?>