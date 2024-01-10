<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeApiTest extends TestCase
{
    use RefreshDatabase; 

    // test 
    public function can_fetch_employees_from_api()
    {
        
        $employees = Employee::factory()->count(3)->create();

        // Here I make a request
        $response = $this->get('/api/employees'); 

        // Here I will Check the response
        $response->assertStatus(200)
                 ->assertJsonCount(3, 'data') 
                 ->assertJsonStructure([
                     'data' => [
                         '*' => [
                             'id',
                             'employee_name',
                             'dob',
                             'phone',
                             
                         ],
                     ],
                 ]);
    }
}
