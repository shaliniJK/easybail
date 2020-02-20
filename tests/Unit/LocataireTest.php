<?php

namespace Tests\Unit;

use App\Locataire;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocataireTest extends TestCase
{
    protected $locataire;

    public function setUp(): void
    {
        parent::setUp();
        $this->locataire = new locataire();

        $this->locataire->first_name = "john";
        $this->locataire->last_name = "doe";
        $this->locataire->address = "65 rue Gustave Delory";
        $this->locataire->postcode = "59000";
        $this->locataire->city = "Lille";
        $this->locataire->country = "France";
        $this->locataire->email = "john.doe@gmail.com";
        $this->locataire->place_of_birth = "Lille";
        $this->locataire->nationality = "francais";
        $this->locataire->idcard_number = "24597john263742doe";
    }

    /** @test */
    function testlocataireCreation()
    {
        $this->assertEquals($this->locataire->first_name, "john");
        $this->assertEquals($this->locataire->last_name, "doe");
        $this->assertEquals($this->locataire->address, "65 rue Gustave Delory");
        $this->assertEquals($this->locataire->postcode, "59000");
        $this->assertEquals($this->locataire->city, "Lille");
        $this->assertEquals($this->locataire->country, "France");
        $this->assertEquals($this->locataire->email, "john.doe@gmail.com");
        $this->assertEquals($this->locataire->place_of_birth, "Lille");
        $this->assertEquals($this->locataire->nationality, "francais");
        $this->assertEquals($this->locataire->idcard_number, "24597john263742doe");
    }

    /** @test */
    function testlocatairefullName()
    {
        $this->assertEquals($this->locataire->fullName(), "john doe");
    }
}
