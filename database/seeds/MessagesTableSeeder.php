<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = new \App\Message();
        $message->message = 'hi';
        $message->user_id = 1;
        $message->save();

        $message = new \App\Message();
        $message->message = 'hello';
        $message->user_id = 2;
        $message->save();

    }
}
