<?php
/*

CREATE TABLE clientes (
email VARCHAR(255) NOT NULL,
PRIMARY KEY (email)
);

INSERT INTO clientes (email) VALUES ('teste@example.com');

*/


/*
 * tabela venda
 * [id,cliente->email,total]
 */

/*
 * {
   "items":[...],
   "customer":{...},
   "payments":[
      {
         "amount" : 3000,
         "payment_method":"checkout",
         "checkout": {
            "expires_in":120,
            "billing_address_editable" : false,
            "customer_editable" : true,
            "accepted_payment_methods": ["credit_card"],
            "success_url": "https://www.pagar.me",
            "credit_card": {...}
         }
      }
   ]
}

 */
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

try {
    $response = $client->request('POST', 'https://api.pagar.me/core/v5/orders', [
        'body' => '
        {
            "customer": {
                "name":"Fulano",
                "type":"individual",
                "email":"fulano@gmail.com",
                "code":"id_user"
            },
            "items": [
                {
                    "amount":10,
                    "description":"Item 1",
                    "quantity":1,
                    "code":"id_item"
                }
            ],
            "payments": [
                {
                    "checkout": {
                        "expires_in":60,
                        "accepted_payment_methods": ["credit_card","pix","debit_card"],
                        "success_url":"policiarcc.com/forum",
                        "customer_editable":true,
                        "billing_address_editable":true
                    },
                    "Pix":{"expires_in":600},
                    "payment_method":"checkout",
                    "amount":1000
                }
            ]
        }',
        'headers' => [
            'accept' => 'application/json',
            'authorization' => 'Basic -',
            'content-type' => 'application/json',
        ],
    ]);
    $res = json_decode($response->getBody());
    $redirect_url = $res['checkouts'][0]['payment_url'];
    header("Location: " . $redirect_url);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Tratar erro na requisição
    die("Ocorreu um erro! " . $e->getMessage());
}
