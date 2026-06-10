<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = auth()->getProvider();

        $user = new User([
            'username' => 'admin',
            'email'    => 'admin@chugoku.co.id',
            'password' => 'Password123!',
        ]);

        $users->save($user);

        $user = $users->findById($users->getInsertID());

        $user->addGroup('superadmin');
    }
}
