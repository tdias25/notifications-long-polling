
<?php

  function countNotifications($userId, $requestTime) {
    global $db;

    $sql = "SELECT * FROM notifications WHERE UNIX_TIMESTAMP(create_time) < $requestTime
              AND id_to = $userId AND status = false";

    $conn = $db->query($sql);
    $count = $conn->rowCount();

    return $count;

  }

  function updateNotification($id) {
    global $db;

    $sql = "UPDATE notifications SET status = true WHERE id = $id";
    $conn = $db->exec($sql);

  }

  function returnAll($userId) {
    global $db;

    $sql = "SELECT * FROM notifications WHERE id_to = $userId";

    $conn = $db->query($sql);
    $notifications = $conn->fetchAll(PDO::FETCH_ASSOC);

    return $notifications;
  }



 ?>
