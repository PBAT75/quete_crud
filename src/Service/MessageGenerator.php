<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 24/11/18
 * Time: 14:08
 */

namespace App\Service;


class MessageGenerator
{
    public function getHappyMessage()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}