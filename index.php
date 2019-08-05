<!DOCTYPE html>
<html>
  <head>
    <title>Na'vi Word of the Day</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#1976d2">
    <meta charset="UTF-8">
  </head>
  <body>

    <nav>
      <div class="nav-wrapper blue darken-2">
        <a href="#" class="brand-logo">Na'vi WotD</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="https://twitter.com/navi_wotd">@navi_wotd</a></li>
          <li><a href="https://twitter.com/search?q=%23navi_wotd">#navi_wotd</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="https://twitter.com/navi_wotd">@navi_wotd</a></li>
      <li><a href="https://twitter.com/search?q=%23navi_wotd">#navi_wotd</a></li>
      <li><a href="#">Login</a></li>
    </ul>
    <!-- <div id="notice" class="amber">Notice: Website Under Construction :D</div> -->

    <div id="content" class="container">
      <div class="section">
        <h1 class="center">Kaltxì!</h1>
        <p class="center">"Na'vi Word Of The Day"
          (<a href="https://twitter.com/navi_wotd">@navi_wotd</a> on Twitter)
          tweets a Na'vi word every day.<br>
          Are you interested in the beautiful Na'vi language? Check out
          <a href="https://learnnavi.org">LearnNavi.org</a> for more.
        </p>
      </div>
      <div class="section">
        <h3 class="center">Latest Tweet</h3>
        <a class="twitter-timeline" href="https://twitter.com/navi_wotd" data-tweet-limit="1" data-chrome="noheader nofooter noscrollbar transparent"></a>
      </div>
      <div class="section">
        <h3 class="center">Tweet History</h3>
        <p>Here are the words of the day broadcast so far. The link in the word will
          open a new window in which you can hear an MP3 with a spoken example. The
          example is provided in writing as well, for easier understanding. If there is
          no link in the table, then unfortunately there is no mp3-file for this word (yet).
        </p>
        <table class="striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Word of the Day</th>
              <th>Aylì'u Na'viyä</th>
              <th>English words</th>
              <th>Audio [MP3]</th>
            </tr>
          </thead>
          <tbody>
          <?php readfile('rows.html'); ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="section"></div>
    <div id="footer" class="section grey lighten-1">
      <div class="container">
        <h4>Irayo</h4>
        <p>My gratitude goes to Dr. Paul Frommer for creating the Na'vi language,
          to Omängum Fra'uti for supplying the sound files and their transcripts
          in Na'vi and English, and to Swoka Ikran for this wonderful
          Na'vi Word of the Day banner:
        </p>
        <img src="http://raxsoft.com/raxdev/sbt/sb.php?b=59">
        <h4>Disclaimer</h4>
        <p>LearnNavi and Navi Word of the Day are not affiliated with the official
          Avatar website, James Cameron, or the Twentieth Century-Fox Film Corporation.
          Trademarks and servicemarks, if or where mentioned,
          are the properties of their respective owners.
        </p>
      </div>
    </div>
    <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>
