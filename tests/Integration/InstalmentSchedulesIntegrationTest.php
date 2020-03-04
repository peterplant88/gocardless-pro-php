<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class InstalmentSchedulesIntegrationTest extends IntegrationTestBase
{
    public function testResourceModelExists()
    {
        $obj = new \GoCardlessPro\Resources\InstalmentSchedule(array());
        $this->assertNotNull($obj);
    }
    
    public function testInstalmentSchedulesCreateWithDates()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->create_with_dates;
        $this->stub_request($fixture);

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'createWithDates'), (array)$fixture->url_params);

        $body = $fixture->body->instalment_schedules;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    public function testInstalmentSchedulesCreateWithDatesWithIdempotencyConflict()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->create_with_dates;

        $idempotencyConflictResponseFixture = $this->loadFixture('idempotent_creation_conflict_invalid_state_error');

        // The POST request responds with a 409 to our original POST, due to an idempotency conflict
        $this->mock->append(new \GuzzleHttp\Psr7\Response(409, [], $idempotencyConflictResponseFixture));

        // The client makes a second request to fetch the resource that was already
        // created using our idempotency key. It responds with the created resource,
        // which looks just like the response for a successful POST request.
        $this->mock->append(new \GuzzleHttp\Psr7\Response(200, [], json_encode($fixture->body)));

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'createWithDates'), (array)$fixture->url_params);
        $body = $fixture->body->instalment_schedules;

        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
        

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $conflictRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $conflictRequest->getUri()->getPath());
        $getRequest = $this->history[1]['request'];
        $this->assertEquals($getRequest->getUri()->getPath(), '/instalment_schedules/ID123');
    }
    
    public function testInstalmentSchedulesCreateWithSchedule()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->create_with_schedule;
        $this->stub_request($fixture);

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'createWithSchedule'), (array)$fixture->url_params);

        $body = $fixture->body->instalment_schedules;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    public function testInstalmentSchedulesCreateWithScheduleWithIdempotencyConflict()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->create_with_schedule;

        $idempotencyConflictResponseFixture = $this->loadFixture('idempotent_creation_conflict_invalid_state_error');

        // The POST request responds with a 409 to our original POST, due to an idempotency conflict
        $this->mock->append(new \GuzzleHttp\Psr7\Response(409, [], $idempotencyConflictResponseFixture));

        // The client makes a second request to fetch the resource that was already
        // created using our idempotency key. It responds with the created resource,
        // which looks just like the response for a successful POST request.
        $this->mock->append(new \GuzzleHttp\Psr7\Response(200, [], json_encode($fixture->body)));

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'createWithSchedule'), (array)$fixture->url_params);
        $body = $fixture->body->instalment_schedules;

        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
        

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $conflictRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $conflictRequest->getUri()->getPath());
        $getRequest = $this->history[1]['request'];
        $this->assertEquals($getRequest->getUri()->getPath(), '/instalment_schedules/ID123');
    }
    
    public function testInstalmentSchedulesList()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->list;
        $this->stub_request($fixture);

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'list'), (array)$fixture->url_params);

        $body = $fixture->body->instalment_schedules;
    
        $records = $response->records;
        $this->assertInstanceOf('\GoCardlessPro\Core\ListResponse', $response);
        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $records[0]);

        $this->assertEquals($fixture->body->meta->cursors->before, $response->before);
        $this->assertEquals($fixture->body->meta->cursors->after, $response->after);
    

    
        foreach (range(0, count($body) - 1) as $num) {
            $record = $records[$num];
            $this->assertEquals($body[$num]->created_at, $record->created_at);
            $this->assertEquals($body[$num]->currency, $record->currency);
            $this->assertEquals($body[$num]->id, $record->id);
            $this->assertEquals($body[$num]->links, $record->links);
            $this->assertEquals($body[$num]->metadata, $record->metadata);
            $this->assertEquals($body[$num]->name, $record->name);
            $this->assertEquals($body[$num]->payment_errors, $record->payment_errors);
            $this->assertEquals($body[$num]->status, $record->status);
            $this->assertEquals($body[$num]->total_amount, $record->total_amount);
            
        }

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testInstalmentSchedulesGet()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->get;
        $this->stub_request($fixture);

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'get'), (array)$fixture->url_params);

        $body = $fixture->body->instalment_schedules;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testInstalmentSchedulesCancel()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->cancel;
        $this->stub_request($fixture);

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'cancel'), (array)$fixture->url_params);

        $body = $fixture->body->instalment_schedules;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    public function testInstalmentSchedulesCancelWithIdempotencyConflict()
    {
        $fixture = $this->loadJsonFixture('instalment_schedules')->cancel;

        $idempotencyConflictResponseFixture = $this->loadFixture('idempotent_creation_conflict_invalid_state_error');

        // The POST request responds with a 409 to our original POST, due to an idempotency conflict
        $this->mock->append(new \GuzzleHttp\Psr7\Response(409, [], $idempotencyConflictResponseFixture));

        // The client makes a second request to fetch the resource that was already
        // created using our idempotency key. It responds with the created resource,
        // which looks just like the response for a successful POST request.
        $this->mock->append(new \GuzzleHttp\Psr7\Response(200, [], json_encode($fixture->body)));

        $service = $this->client->instalmentSchedules();
        $response = call_user_func_array(array($service, 'cancel'), (array)$fixture->url_params);
        $body = $fixture->body->instalment_schedules;

        $this->assertInstanceOf('\GoCardlessPro\Resources\InstalmentSchedule', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->currency, $response->currency);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->name, $response->name);
        $this->assertEquals($body->payment_errors, $response->payment_errors);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->total_amount, $response->total_amount);
        

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $conflictRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $conflictRequest->getUri()->getPath());
        $getRequest = $this->history[1]['request'];
        $this->assertEquals($getRequest->getUri()->getPath(), '/instalment_schedules/ID123');
    }
    
}
