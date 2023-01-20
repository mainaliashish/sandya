<?php

namespace Database\Seeders;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact_1 = Contact::create([
            'country' => 'Nepal',
            'address' => 'Kathmandu',
            'address_one' => 'Baneshwor',
            'phone_number_one' => '0987654567',
            'phone_number_two' => '1234567890',
            'phone_number_three' => '1234567890',
            'phone_number_four' => '09090909090',
            'email_one' => 'sandhya@hotmail.com',
            'email_two' => 'sandhya@gmail.com',
        ]);

        $contact_2 = Contact::create([
            'country' => 'Nepal',
            'address' => 'Jhapa',
            'address_one' => 'Damak',
            'phone_number_one' => '0987654567',
            'phone_number_two' => '1234567890',
            'phone_number_three' => '1234567890',
            'phone_number_four' => '09090909090',
            'email_one' => 'sandhya@hotmail.com',
            'email_two' => 'sandhya@gmail.com',
        ]);

        $contact_3 = Contact::create([
            'country' => 'Nepal',
            'address' => 'Jhapa',
            'address_one' => 'Damak',
            'phone_number_one' => '0987654567',
            'phone_number_two' => '1234567890',
            'phone_number_three' => '1234567890',
            'phone_number_four' => '09090909090',
            'email_one' => 'sandhya@hotmail.com',
            'email_two' => 'sandhya@gmail.com',
        ]);

        $contact_4 = Contact::create([
            'country' => 'Nepal',
            'address' => 'Jhapa',
            'address_one' => 'Damak',
            'phone_number_one' => '0987654567',
            'phone_number_two' => '1234567890',
            'phone_number_three' => '1234567890',
            'phone_number_four' => '09090909090',
            'email_one' => 'sandhya@hotmail.com',
            'email_two' => 'sandhya@gmail.com',
        ]);

        $contact_5 = Contact::create([
            'country' => 'Nepal',
            'address' => 'Jhapa',
            'address_one' => 'Damak',
            'phone_number_one' => '0987654567',
            'phone_number_two' => '1234567890',
            'phone_number_three' => '1234567890',
            'phone_number_four' => '09090909090',
            'email_one' => 'sandhya@hotmail.com',
            'email_two' => 'sandhya@gmail.com',
        ]);
    }
}
