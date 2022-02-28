<?php
namespace App\services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email)
    {
         return $this->client()->lists->addListMember(config('services.mailchimp.list.subscribers'), [
            "email_address" => request('email'),
            "status" => "subscribed",
        ]);


    }

    protected function client()
    {

       return  (new ApiClient)->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);
    }

}
