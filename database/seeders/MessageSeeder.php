<?php

namespace Database\Seeders;
use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message_1 = Message::create([
            'name'  => 'Ram Lama',
            'email' => 'lamaram@gmail.com',
            'phone' => '0987654321',
            'message'   => 'Eiusmod est dolore consectetur nulla proident commodo velit elit nostrud. Id in qui voluptate adipisicing sint. Do fugiat amet et excepteur et magna ex elit id qui ipsum ad. Nostrud magna dolore laborum fugiat velit. Velit dolore ad est adipisicing. Id culpa ea sit fugiat deserunt fugiat est aliquip fugiat proident exercitation esse minim culpa.',
        ]);
        $message_2 = Message::create([
            'name'  => 'Ram Lama',
            'email' => 'lamaram@gmail.com',
            'phone' => '0987654321',
            'message'   => 'Eiusmod est dolore consectetur nulla proident commodo velit elit nostrud. Id in qui voluptate adipisicing sint. Do fugiat amet et excepteur et magna ex elit id qui ipsum ad. Nostrud magna dolore laborum fugiat velit. Velit dolore ad est adipisicing. Id culpa ea sit fugiat deserunt fugiat est aliquip fugiat proident exercitation esse minim culpa.',
        ]);
        $message_3 = Message::create([
            'name'  => 'Ram Lama',
            'email' => 'lamaram@gmail.com',
            'phone' => '0987654321',
            'message'   => 'Eiusmod est dolore consectetur nulla proident commodo velit elit nostrud. Id in qui voluptate adipisicing sint. Do fugiat amet et excepteur et magna ex elit id qui ipsum ad. Nostrud magna dolore laborum fugiat velit. Velit dolore ad est adipisicing. Id culpa ea sit fugiat deserunt fugiat est aliquip fugiat proident exercitation esse minim culpa.',
        ]);
    }
}
