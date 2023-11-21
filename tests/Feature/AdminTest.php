<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

use App\Models\User;
use App\Models\Employee;

class AdminTest extends TestCase
{
    protected $adminUser;
    protected $employee;

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->adminUser = User::factory()->create(['role_id'=> '1']);
        $this->employee = Employee::factory()->create([
            "first_name" => "Зубенко",
            "last_name" => "Михаил",
            "father_name" => "Петрович",
            "birth_date" => "1996-02-28",
            "passport" => "8475384757",
            "phone" => "+79248574639"
    ]);
    }

    public function test_administrator_can_create_an_employee()
    {
        $name = "testdispatcher";
        $email = "testdispatcher@gmail.com";
        $password = "testdispatcher@gmail.com";

        $response = $this->actingAs($this->adminUser)->post("/admin.user.create", [
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "employee_id" => $this->employee->id
        ]);

        $response->assertStatus(302);
        $response->assertEquals('employee_id', $this->employee->id);
    }

    public function test_new_users_have_hashed_password(): void
    {
        $first_name = 'Михаил';
        $last_name = 'Зубенко';
        $father_name = 'Петрович';
        $name = 'testuser';
        $password = 'testpassword';
        $birth_date = '02-28-1996';
        $passport = '8475384757';
        $phone = '+79248574639';

        $response = $this->post('/register',[
            '_token' => csrf_token(),
            'first_name'=> $first_name,
            'last_name'=> $last_name,
            'father_name'=> $father_name,
            'name'=> $name,
            'password'=> $password,
            'birth_date'=> $birth_date,
            'passport'=> $passport,
            'phone'=> $phone
        ]);
        $response->assertStatus(302);
        $this->assertTrue(\Hash::check($password, Hash::make($password)));
    }

}