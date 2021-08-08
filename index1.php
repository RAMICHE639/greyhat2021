<?php
$body = [
    'Messages' => [
        [
        'From' => [
            'Email' => "hacking_oussama@ramich.club",
            'Name' => "hacking ramich"
        ],
        'To' => [
            [
                'Email' => "sisima1ramiche@gmail.com",
                'Name' => "oussama"
            ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'HTMLPart' => "<h3>Dear User, welcome to Mailjet!</h3><br />May the delivery force be with you!"
        ]
    ]
];
  
$ch = curl_init();
  
curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json')
);
curl_setopt($ch, CURLOPT_USERPWD, "a12fcd875009c5d9e4a6ff8e4c7d97ad:31027d38247a7949e8808e9f5eacc7f4");
$server_output = curl_exec($ch);
curl_close ($ch);
  
$response = json_decode($server_output);
if ($response->Messages[0]->Status == 'success') {
    echo "Email sent successfully.";
}