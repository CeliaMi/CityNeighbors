<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Specie;

class CRUDSpecieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_listSpecieAppearInHomeView () {
        $this->withExceptionHandling();
        $species = Specie::factory(2)->create();
        $specie = $species[0];
        $response = $this->get('/');
        $response->assertSee($specie->name);
        $response->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_listSpecieCanBeDeleted () {
        $this->withExceptionHandling();
        $specie = Specie::factory()->create();
        $this->assertCount(1, Specie::all());
        $response = $this->delete(route('deleteSpecie', $specie->id));
        $this->assertCount(0,Specie::all());
        
    }

    public function test_anSpecieCanBeCreated(){
        $this->withExceptionHandling();
        $response = $this->post(route('storeSpecie'),
        [
            'name'=>' ave',
            'individuals'=>'7',
            'description'=>'description',
            'areas'=>'areas',
            'img'=>'img' , 
        ]);

        $this->assertCount(1, Specie::all());

    }

    public function test_anSpecieCanBeUpdated(){
        $this->withExceptionHandling();
        $specie = Specie::Factory()->create();
        $this->assertCount(1, Specie::all());

        $response = $this->patch(route('updateSpecie', $specie->id),['name'=>'New Name']);
        $this->assertEquals('New Name', Specie::first()->name);
    }
}
