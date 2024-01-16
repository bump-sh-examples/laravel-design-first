<?php
use App\Models\Widget;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('POST /widgets', function () {
    it('returns a valid record', function () {
        $this
            ->postJson("/api/widgets", [
                'name' => 'Test Widget',
                'description' => 'This is a test widget',
            ])
            ->assertStatus(201);
    });

    it('returns a 400 for invalid record', function () {
        $this
            ->postJson("/api/widgets", [
                'name' => 'Missing a Description',
            ])
            ->assertStatus(400);
    });
});

describe('GET /widgets/{id}', function () {
    beforeEach(function () {
        $this->widget = Widget::factory()->create();
    });

    it('returns 200 for record that exists', function () {
        $this
            ->getJson("/api/widgets/{$this->widget->id}")
            ->assertStatus(200);
    });

    it('returns a 404 for missing record', function () {
        $this
            ->getJson("/api/widgets/12345")
            ->assertStatus(404);
    });
});
