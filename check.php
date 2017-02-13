
<?php

require_once __DIR__ . '/inc/bootstrap.php';

// Let infinite requests
set_time_limit(0);

// Example of user ID
$userId = 1;


while(true) {
  $requestTime = time();

  // Get the number of new notifications
  $numberOf = countNotifications($userId, $requestTime);

  // If the number is more then 0 echo the value
  if($numberOf > 0) {
      echo $numberOf;
      // And break the loop
      break;
  }

  // Sleep for 2 seconds and continue the loop
  else {
    sleep(2);
    continue;
  }

}
