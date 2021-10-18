<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Video\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class RoomTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://video.twilio.com/v1/Rooms/RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "peer-to-peer",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "unique_name",
                "max_participants": 10,
                "max_concurrent_published_tracks": 0,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "audio_only": false,
                "media_region": "us1",
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->video->v1->rooms->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://video.twilio.com/v1/Rooms'
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "peer-to-peer",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "max_concurrent_published_tracks": 0,
                "max_participants": 10,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "media_region": "us1",
                "audio_only": false,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testCreateWebrtcGoResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "go",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "room1",
                "max_participants": 10,
                "max_concurrent_published_tracks": 0,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "media_region": "us1",
                "audio_only": false,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testCreateGroupRoomsResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "group",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "grouproom",
                "max_participants": 50,
                "max_concurrent_published_tracks": 170,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "media_region": "us1",
                "audio_only": false,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testCreateGroupRoomsWithAudioOnlyEnabledResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "group",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "grouproom",
                "max_participants": 50,
                "max_concurrent_published_tracks": 170,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [],
                "media_region": "us1",
                "audio_only": true,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testCreateSmallGroupRoomsResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "group-small",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "SmallDailyStandup",
                "max_participants": 4,
                "max_concurrent_published_tracks": 170,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "media_region": "us1",
                "audio_only": false,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testCreateLargeGroupRoomsResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "group",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "MyWebinar",
                "max_participants": 50,
                "max_concurrent_published_tracks": 16,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "media_region": "us1",
                "audio_only": false,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testCreateLargeGroupRoomsWithAudioOnlyEnabledResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "in-progress",
                "type": "group",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "MyWebinar",
                "max_participants": 50,
                "max_concurrent_published_tracks": 16,
                "duration": 0,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [],
                "media_region": "us1",
                "audio_only": true,
                "end_time": "2015-07-30T20:00:00Z",
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->create();

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->video->v1->rooms->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://video.twilio.com/v1/Rooms'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "rooms": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://video.twilio.com/v1/Rooms?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://video.twilio.com/v1/Rooms?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "rooms"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->read();

        $this->assertNotNull($actual);
    }

    public function testReadWithStatusResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "rooms": [
                    {
                        "sid": "RM4070b618362c1682b2385b1f9982833c",
                        "status": "completed",
                        "date_created": "2017-04-03T22:21:49Z",
                        "date_updated": "2017-04-03T22:21:51Z",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "type": "peer-to-peer",
                        "enable_turn": true,
                        "unique_name": "RM4070b618362c1682b2385b1f9982833c",
                        "status_callback": null,
                        "status_callback_method": "POST",
                        "end_time": "2017-04-03T22:21:51Z",
                        "duration": 2,
                        "max_participants": 10,
                        "max_concurrent_published_tracks": 10,
                        "record_participants_on_connect": false,
                        "video_codecs": [
                            "VP8"
                        ],
                        "media_region": "us1",
                        "audio_only": false,
                        "url": "https://video.twilio.com/v1/Rooms/RM4070b618362c1682b2385b1f9982833c",
                        "links": {
                            "participants": "https://video.twilio.com/v1/Rooms/RM4070b618362c1682b2385b1f9982833c/Participants",
                            "recordings": "https://video.twilio.com/v1/Rooms/RM4070b618362c1682b2385b1f9982833c/Recordings",
                            "recording_rules": "https://video.twilio.com/v1/Rooms/RM4070b618362c1682b2385b1f9982833c/RecordingRules"
                        }
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://video.twilio.com/v1/Rooms?Status=completed&PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://video.twilio.com/v1/Rooms?Status=completed&PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "rooms"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms->read();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("in-progress");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['Status' => "in-progress", ];

        $this->assertRequest(new Request(
            'post',
            'https://video.twilio.com/v1/Rooms/RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
            null,
            $values
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "completed",
                "type": "peer-to-peer",
                "sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "enable_turn": true,
                "unique_name": "unique_name",
                "max_participants": 10,
                "max_concurrent_published_tracks": 10,
                "status_callback_method": "POST",
                "status_callback": null,
                "record_participants_on_connect": false,
                "video_codecs": [
                    "VP8"
                ],
                "media_region": "us1",
                "audio_only": false,
                "end_time": "2015-07-30T20:00:00Z",
                "duration": 10,
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "participants": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants",
                    "recordings": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings",
                    "recording_rules": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RecordingRules"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("in-progress");

        $this->assertNotNull($actual);
    }
}