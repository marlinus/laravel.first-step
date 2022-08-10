<?php

namespace App\Listeners;

use App\Events\TestEvent;

class ListenTest {
  /**
   * Create the event listener.
   * @return void
   */
  public function __construct() {

  }

  /**
   * Handle the event.
   * @param  \App\Events\TestEvent  $event
   */
  public function handle(TestEvent $event) {
    $token = '5246542107:AAFHDv8MuYOYi7rwleW4rMyyaczeaarlahM';
    $id = '853299424';

    $ch = curl_init('https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $id . '&text=' . $event->data);
    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_exec($ch);
    curl_close($ch);

  }
}
