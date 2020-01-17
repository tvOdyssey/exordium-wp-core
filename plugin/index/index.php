<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
      #wpfooter {
        background: #e9ecef !important;
      }
      .card {
        max-width: none !important;
      }
    </style>
  </head>
  <body>

    <main role="main">

      <!-- jumbotron -->
      <section class="jumbotron text-center bg-white" style="margin-left: -20px;">
        <div class="container">
          <h1 class="display-4"><?php echo $info['name']; ?></h1>
          <p class="lead">Documentation, and Changelog information on this <br>
            wordpress plugin can be viewed on the Github repo.</p>
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
      </section>

      <!-- feature listing -->
      <section class="py-4 bg-light" style="margin-left: -20px;">

        <div class="container">

          <!-- card: subtitles -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Subtitles
              </h5>
              <p class="card-text">
                This feature allows you to create subtitles for your pages and posts. If you're using a theme that isn't the <code>exordium-wp-theme</code> you'll need to add those abilities into your themes <code>function.php</code> file.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- card: category featured images -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Category Featured Images
              </h5>
              <p class="card-text">
                This feature allows you to upload and add featured images to category pages.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- card: avatars -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Avatars
              </h5>
              <p class="card-text">
                Allows members with access to the dashboard to upload their own avatars, and also use generated ones.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-cogs"></i>
                    Settings
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- card: forms -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Exordium Forms
              </h5>
              <p class="card-text">
                Allows the inclusion of Bootstrap 4 designed forms, which can be used as contact forms, subscribing forms and other useful types.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-cogs"></i>
                    Settings
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- card: activitylog -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Activity Log
              </h5>
              <p class="card-text">
                View what users (that have access to the dashboard panel) are doing. Also allows you to view failed logins and users attempting to access the wp-admin side of your website.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-cogs"></i>
                    Settings
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- card: realtimestat -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Realtime Statistics
              </h5>
              <p class="card-text">
                Allows administrators to see extensive data on what visitors are doing on your website. Information includes traffic sources, in-depth visitor information (like browser, os and ip), and online users.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-cogs"></i>
                    Settings
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- card: dashwidgets -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">
                Dashboard Widgets
              </h5>
              <p class="card-text">
                Organize and display customized exordium widgets (activitylog, and realtimestat), notes, system and debugging information, and php error logs.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Enable/Disabled</label>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-pen"></i>
                    Update
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-dark">
                    <i class="fa fa-fw fa-cogs"></i>
                    Settings
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
