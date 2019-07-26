<?php

namespace Acme\Users\Updates;

use Amorphine\Relationissue\Models\Phone;
use Seeder;
use Amorphine\Relationissue\Models\User;

class SeedUsersTable extends Seeder
{
    public function run()
    {
        $johnNumber = Phone::create([
            'number' => 'JohnNumber'
        ]);

        $danielNumber = Phone::create([
            'number' => 'DanielNumber'
        ]);

        $john = User::create([
            'name' => 'John',
            'phone' => $johnNumber
        ]);

        $daniel = User::create([
            'name' => 'Daniel',
            'phone' => $danielNumber
        ]);

    }
}
