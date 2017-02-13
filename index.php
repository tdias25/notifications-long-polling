
<!DOCTYPE html>
  <html>

    <head>
      <meta charset="utf-8" />
      <title>Long Polling</title>
    </head>

    <body>
      <div id="placer">
        <p id="numberOf">Nothing yet...</p>
        <a href="show.php">ler notificações</a>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <script>

        function watchNews() {

            $.get('check.php', function(data) {
              $("#numberOf").html(data);
              watchNews();
            });
        }

        watchNews();
      </script>
    </body>

  </html>
