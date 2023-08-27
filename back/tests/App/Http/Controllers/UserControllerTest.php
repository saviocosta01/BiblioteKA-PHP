<?php

namespace Tests\App\Http\controllers;

use App\Http\Controllers\UserController;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Tests\TestCase;
use Mockery;

use function PHPUnit\Framework\assertIsArray;
use function PHPUnit\Framework\assertJson;

# php artisan test --filter=UserControllerTest
class UserControllerTest extends TestCase
{
    public function test_create()
    {
        # php artisan test --filter=UserControllerTest::test_create
        $body = new CreateUserRequest([
            'name' => 'savio',
            'email' => 'savio@mail.com',
            'password' => '1234',
            'address' => 'rua teste',
            'category' => 'estudante'
        ]);
        $controller = new UserController();
        $controller->create($body);
        $this->assertDatabaseHas('users', ['email' => 'savio@mail.com']);
    }
    public function test_list()
    {
        # php artisan test --filter=UserControllerTest::test_list
        $user = "";
        for ($i = 0; $i < 5; $i++) {
            $user = new User([
                'name' => 'savio',
                'email' => 'savio@mail.com',
                'password' => bcrypt('1234'),
                'address' => 'rua teste',
                'category' => 'estudante' // Lembre-se de usar bcrypt para criptografar a senha
            ]);
        }
        $user->save();

        $userService = new UserService();

        $users = $userService->listUsers();

        $this->assertEquals('savio@mail.com', $users[0]['email']);
    }
}
