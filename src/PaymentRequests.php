<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class PaymentRequests {
        public function create($params) {
            return Client::postRequest('payment_requests', $params);
        }
    }
?>