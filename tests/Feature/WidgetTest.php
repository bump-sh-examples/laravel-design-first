<?php
use App\Models\Widget;

describe('POST /widgets', function () {
    it('returns expected response when request is valid', function () {
        $this
            ->postJson("/api/widgets", [
                'name' => 'Test Widget',
                'description' => 'This is a test widget',
            ])
            ->assertValidRequest()
            ->assertValidResponse(201);
    });

    it('returns a 400 for invalid request', function () {
        $this
            ->postJson("/api/widgets", [
                'name' => 'Missing a Description',
            ])
            ->assertValidResponse(400);
    });
});

describe('GET /widgets', function () {

    it('returns 200 for the collection', function () {
        Widget::factory(5)->create();

        $this
            ->getJson("/api/widgets")
            ->assertValidResponse(200);
    });

    it('returns a 200 even when collection is empty', function () {
        $this
            ->getJson("/api/widgets")
            ->assertValidResponse(200);
    });
});

describe('GET /widgets/{id}', function () {

    it('returns 200 for record that exists', function () {
        $widget = Widget::factory()->create();
        $this
            ->getJson("/api/widgets/{$widget->id}")
            ->assertValidResponse(200);
    });

    it('returns a 404 for missing record', function () {
        Widget::factory()->create();

        $this
            ->getJson("/api/widgets/12345")
            ->assertValidResponse(404);
    });
});
