<!DOCTYPE html>
<html>
  <head>
    <title>Na'vi Word of the Day</title>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#0097a7">
    <meta charset="UTF-8">
  </head>
  <body>
    <nav>
      <div class="nav-wrapper cyan darken-2">
        <a href="#" class="brand-logo">Na'vi WotD</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="https://twitter.com/navi_wotd">@navi_wotd</a></li>
          <li><a href="https://twitter.com/search?q=%23navi_wotd">#navi_wotd</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        <a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="https://twitter.com/navi_wotd">@navi_wotd</a></li>
      <li><a href="https://twitter.com/search?q=%23navi_wotd">#navi_wotd</a></li>
      <li><a href="#">Login</a></li>
    </ul>
    <div id="notice" class="amber">Notice: Website Under Construction :D</div>
    <div id="content" class="container">
      <h1 class="center">Kaltxì!</h1>
      <p>"Na'vi Word Of The Day"
        (<a href="https://twitter.com/navi_wotd">@navi_wotd</a> on Twitter)
        tweets a Na'vi word every day.<br>
        Are you interested in the beautiful Na'vi language? Check out
        <a href="https://learnnavi.org">LearnNavi.org</a> for more.
      </p>
      <img id="sigbar" src="http://raxsoft.com/raxdev/sbt/sb.php?b=59">
      <p>Here are the words of the day broadcast so far. The link in the word will
        open a new window in which you can hear an MP3 with a spoken example. The
        example is provided in writing as well, for easier understanding. If there is
        no link under the word, then unfortunately there is no mp3-file for this word (yet).
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
    <div id="footer" class="container">
      <p><strong>Irayo</strong></p>
      <p>My gratitude goes to Dr. Paul Frommer for creating the Na'vi language,
        to Omängum Fra'uti for supplying the sound files and their transcripts
        in Na'vi and English, and to Swoka Ikran for the wonderful
        Na'vi Word of the Day banner as can be seen at the top.
      </p>
      <p><strong>Disclaimer</strong></p>
      <p>LearnNavi and Navi Word of the Day are not affiliated with the official
        Avatar website, James Cameron, or the Twentieth Century-Fox Film Corporation.
        Trademarks and servicemarks, if or where mentioned,
        are the properties of their respective owners.
      </p>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>
