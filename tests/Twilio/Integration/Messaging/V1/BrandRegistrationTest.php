<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Messaging\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class BrandRegistrationTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->brandRegistrations("BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://messaging.twilio.com/v1/a2p/BrandRegistrations/BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "BN0044409f7e067e279523808d267e2d85",
                "account_sid": "AC78e8e67fc0246521490fb9907fd0c165",
                "customer_profile_bundle_sid": "BU3344409f7e067e279523808d267e2d85",
                "a2p_profile_bundle_sid": "BU3344409f7e067e279523808d267e2d85",
                "date_created": "2021-01-27T14:18:35Z",
                "date_updated": "2021-01-27T14:18:36Z",
                "brand_type": "STANDARD",
                "status": "PENDING",
                "tcr_id": "BXXXXXX",
                "failure_reason": "Registration error",
                "url": "https://messaging.twilio.com/v1/a2p/BrandRegistrations/BN0044409f7e067e279523808d267e2d85",
                "brand_score": 42,
                "brand_feedback": [
                    "TAX_ID",
                    "NONPROFIT"
                ],
                "identity_status": "VERIFIED",
                "russell_3000": true,
                "tax_exempt_status": "501c3",
                "skip_automatic_sec_vet": false,
                "mock": false,
                "links": {
                    "brand_vettings": "https://messaging.twilio.com/v1/a2p/BrandRegistrations/BN0044409f7e067e279523808d267e2d85/Vettings"
                }
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->brandRegistrations("BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->brandRegistrations->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://messaging.twilio.com/v1/a2p/BrandRegistrations'
        ));
    }

    public function testReadResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://messaging.twilio.com/v1/a2p/BrandRegistrations?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "next_page_url": null,
                    "key": "data",
                    "url": "https://messaging.twilio.com/v1/a2p/BrandRegistrations?PageSize=50&Page=0"
                },
                "data": [
                    {
                        "sid": "BN0044409f7e067e279523808d267e2d85",
                        "account_sid": "AC78e8e67fc0246521490fb9907fd0c165",
                        "customer_profile_bundle_sid": "BU3344409f7e067e279523808d267e2d85",
                        "a2p_profile_bundle_sid": "BU3344409f7e067e279523808d267e2d85",
                        "date_created": "2021-01-27T14:18:35Z",
                        "date_updated": "2021-01-27T14:18:36Z",
                        "brand_type": "STANDARD",
                        "status": "APPROVED",
                        "tcr_id": "BXXXXXX",
                        "failure_reason": "Registration error",
                        "url": "https://messaging.twilio.com/v1/a2p/BrandRegistrations/BN0044409f7e067e279523808d267e2d85",
                        "brand_score": 42,
                        "brand_feedback": [
                            "TAX_ID",
                            "NONPROFIT"
                        ],
                        "identity_status": "VERIFIED",
                        "russell_3000": true,
                        "tax_exempt_status": "501c3",
                        "skip_automatic_sec_vet": false,
                        "mock": false,
                        "links": {
                            "brand_vettings": "https://messaging.twilio.com/v1/a2p/BrandRegistrations/BN0044409f7e067e279523808d267e2d85/Vettings"
                        }
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->brandRegistrations->read();

        $this->assertNotNull($actual);
    }

    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->brandRegistrations->create("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = [
            'CustomerProfileBundleSid' => "BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
            'A2PProfileBundleSid' => "BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
        ];

        $this->assertRequest(new Request(
            'post',
            'https://messaging.twilio.com/v1/a2p/BrandRegistrations',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "BN0044409f7e067e279523808d267e2d85",
                "account_sid": "AC78e8e67fc0246521490fb9907fd0c165",
                "customer_profile_bundle_sid": "BU0000009f7e067e279523808d267e2d90",
                "a2p_profile_bundle_sid": "BU1111109f7e067e279523808d267e2d85",
                "date_created": "2021-01-28T10:45:51Z",
                "date_updated": "2021-01-28T10:45:51Z",
                "brand_type": "STANDARD",
                "status": "PENDING",
                "tcr_id": "BXXXXXX",
                "failure_reason": "Registration error",
                "url": "https://messaging.twilio.com/v1/a2p/BrandRegistrations/BN0044409f7e067e279523808d267e2d85",
                "brand_score": 42,
                "brand_feedback": [
                    "TAX_ID",
                    "NONPROFIT"
                ],
                "identity_status": "VERIFIED",
                "russell_3000": true,
                "tax_exempt_status": "501c3",
                "skip_automatic_sec_vet": false,
                "mock": false,
                "links": {
                    "brand_vettings": "https://messaging.twilio.com/v1/a2p/BrandRegistrations/BN0044409f7e067e279523808d267e2d85/Vettings"
                }
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->brandRegistrations->create("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

        $this->assertNotNull($actual);
    }
}