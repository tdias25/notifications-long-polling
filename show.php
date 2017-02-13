
<?php

  require_once __DIR__ . '/inc/bootstrap.php';

  // Get all of the notifications with id_to = 1
  $notifications = returnAll(1);

  if(!empty($notifications)) {
    // Loop the notifications
    foreach($notifications as $notification) {
      // echo each notification
      echo $notification['notification'] . '<br/>';
      // If it is no read yet
      if($notification['status'] == false) {
        // Update the status to read
        updateNotification($notification['id']);
      }
    }
  }

  else {
    echo 'Nenhuma notificação';
  }


 ?>
