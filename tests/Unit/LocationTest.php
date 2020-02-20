<?php

namespace Tests\Unit;

use App\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocationTest extends TestCase
{
    protected $location;

    public function setUp(): void
    {
        parent::setUp();
        $this->location = new location();
        $this->location->user_id = 1;
        $this->location->locataire_id = 1;
        $this->location->property_id = 700;
        $this->location->loyer = 890;
        $this->location->charges = 90;
        $this->location->preavis = 3;
        $this->location->date_signature_bail = "01/02/2019";
        $this->location->date_entree = "02/02/2019";
    }

    /** @test */
    function testlocationCreation()
    {
        $this->assertEquals($this->location->loyer, 890);
        $this->assertEquals($this->location->charges, 90);
        $this->assertEquals($this->location->preavis, 3);
        $this->assertEquals($this->location->date_signature_bail, "01/02/2019");
        $this->assertEquals($this->location->date_entree, "02/02/2019");
        printf($this->location->description());
    }
}
