<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Spectator\Spectator;

uses(Tests\TestCase::class)->in('Feature', 'Unit');

uses(RefreshDatabase::class)->in('Feature');

uses()->beforeEach(fn () => Spectator::using('openapi.yaml'))->in('Feature');
