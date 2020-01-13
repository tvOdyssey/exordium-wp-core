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
          <div class="col-md-12">

            <div class="mt-5">
              <h4>Plugin Readme</h4>
              <p><code>exordium-wp-core</code> is a customized wordpress plugin made for the <a href="https://exordium.dev">https://exordium.dev</a> website. Exordium is a virtual private networking software in the works.</p>
              <p>This plugin has been released open source and will have features required for the Exordium website, including but not limited to the following features.</p>
            </div>

            <div class="mt-5">
              <h4>Functionality</h4>
              <p>You can enable or disable features of this plugin you don't want to have access to. By default, all extensions of this plugin are enabled.</p>

              <!-- subtitle -->
              <div class="card w-100" style="padding:0;">
                <div class="card-body">
                  <h5 class="card-title">Page/Post Subtitles</h5>
                  <p class="card-text">This feature allows you yo create subtitles for your pages and posts. If you're using a theme that isn't the <code>exordium-wp-theme</code> you'll need to add those abilities into your themes <code>function.php</code> file.</p>

                  <form class="form">
                    <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Subtitle functionality</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <a href="#" class="btn btn-primary">Update feature</a>
                    </div>
                  </form>

                </div>
              </div>

              <!-- avatars -->
              <div class="card w-100" style="padding:0;">
                <div class="card-body">
                  <h5 class="card-title">Page/Post Subtitles</h5>
                  <p class="card-text">This feature allows you yo create subtitles for your pages and posts. If you're using a theme that isn't the <code>exordium-wp-theme</code> you'll need to add those abilities into your themes <code>function.php</code> file.</p>

                  <form class="form">
                    <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Subtitle functionality</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <a href="#" class="btn btn-primary">Update feature</a>
                    </div>
                  </form>

                </div>
              </div>
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
