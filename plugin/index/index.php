<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

    <section class="main" style="margin-left: -20px;">

      <div class="jumbotron">
        <div class="container-full">
          <h1 class="display-4"><?php echo $info['name']; ?></h1>
          <p class="lead">Documentation, and Changelog information on this wordpress plugin can be viewed on the Github repo.</p>
          <p>
            <a href="https://github.com/tvOdyssey/exordium-wp-core" class="btn btn-dark">
              <i class="fab fa-github"></i> Exordium WP Core
            </a>
            <a href="https://discord.exordium.dev/" class="btn btn-dark">
              <i class="fab fa-discord"></i> Exordium Discord
            </a>
          </p>
          <p class="text-muted f-s-11"><?php echo $info['name']; ?> is current running off of version <?php echo $info['version']; ?>.</p>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-md-8">



          </div>
          <div class="col-md-4">

            <div class="card" style="padding:0;">
              <div class="card-header">
                Exordium Extensions
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Avatar Options</a></li>
                <li class="list-group-item"><a href="#">Form Management</a></li>
                <li class="list-group-item"><a href="#">Activity Log</a></li>
                <li class="list-group-item"><a href="#">Realtime Statistics</a></li>
                <li class="list-group-item"><a href="#">Dashboard Widgets</a></li>
              </ul>
            </div>

          </div>

        </div>

      </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
