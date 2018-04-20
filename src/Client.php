<?php
    namespace Selly;
    use GuzzleHttp\Client as Guzzle;
    use RuntimeException;

    class Client {
        /**
         * The Selly API Endpoint
         *
         * @var string
         */
        protected static $endpoint = 'https://selly.gg/api/v2';

         /**
         * The Guzzle HTTP client instance
         *
         * @var \GuzzleHttp\Client
         */
        protected static $client;

        public static function authenticate($email, $token) {
            self::$client = new Guzzle([
                'auth' => [$email, $token],
                'headers' => [
                    'content-type' => 'application/json'
                ]
            ]);
        }

        public static function getRequest($path, $params = [], $headers = []) {
            $endpoint = self::$endpoint;
            try {
                $response = self::$client->get("{$endpoint}/{$path}");
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                return $exception->getResponse()->getBody(true);
            }
            return json_decode($response->getBody());
        }

        public static function postRequest($path, $params = [], $headers = []) {
            $endpoint = self::$endpoint;
            try {
                $response = self::$client->post("{$endpoint}/{$path}",
                [
                    'json' => $params
                ]);
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                return $exception->getResponse()->getBody(true);
            }
            return json_decode($response->getBody());
        }
    }

?>