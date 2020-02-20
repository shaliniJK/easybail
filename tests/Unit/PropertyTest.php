<?php

namespace Tests\Unit;

use App\Property;
use App\PropertyType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PropertyTest extends TestCase
{
    protected $property;
    protected $propertyType;

    public function setUp(): void
    {
        parent::setUp();
        $this->property = new Property();
        $this->propertyType = new PropertyType();

        $this->property->size = 42;
        $this->property->address = "68 rue Gustave Delory";
        $this->property->postcode = "59000";
        $this->property->city = "Lille";
        $this->propertyType->type = "Appartement";
        $this->property->propertyType = $this->propertyType;
    }

    /** @test */
    function testPropertyCreation()
    {
        $this->assertEquals($this->property->size, 42);
        $this->assertEquals($this->property->address, "68 rue Gustave Delory");
        $this->assertEquals($this->property->postcode, "59000");
        $this->assertEquals($this->property->city, "Lille");
    }

    /** @test */
    function testPropertyfullAddress()
    {
        $this->assertEquals($this->property->fullAddress(), "68 rue Gustave Delory, 59000 Lille");
    }

    /** @test */
    function testPropertydesignation()
    {
        $this->assertEquals($this->property->designation(), "Appartement à Lille");
    }
}
