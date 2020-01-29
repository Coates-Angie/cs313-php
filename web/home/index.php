<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    <link rel="stylesheet" href="styles/main.css">

  </head>

  <body>

    <header>
      <?php include 'modules/header.php'; ?>
    </header>

    <nav>
      <?php include 'modules/nav.php'; ?>
    </nav>


    <div class="container">
      <div class="main">
        <h2>About Me</h2>
        <div class="photos">
          <div id="Aboutme">
            <img id="me" src="img/resizedCaribbean2020.jpg">
          </div>
        </div>
        <p>Hi Everyone! My name is Angie Coates. I am a Web Design and Development student an in my last year of studies
          at Brigham Young University-Idaho. I was born and raised in Las Vegas, Nevada and am a sucker for warm
          weather. I have been married
          to my husband Josh Coates for 18 years and we have 3 fun boys.<br>One of my hobbies is traveling, especially
          to warm places and I love going on cruises. This page will show some pictures of some of the places I visited
          in the Western Carribean
          this year. Enjoy!
        </p>

      </div>
      <div class="side">
        <h2>Welcome to my site!</h2>
        <h5>Cozumel, Mexico Jan 9, 2020</h5>
        <div class="photos">
          <img id="ocean" src="img/ocean.jpg">
        </div>
        <h3>The Carribean is AMAZING!!</h3>
        <p>Those who know me well, know how much I love warm weather and sunshine in general. A person can find plenty
          of that in the Carribean. One of my hobbies is traveling and I especially love cruising. The image above is
          what you see sourounding
          the island of Cozumel, Mexico. It has amazing reefs and the water is mesmerizing.</p>
        <br>
        <h2>You Better Belize it!</h2>
        <h5>Belize Jan.7, 2020</h5>
        <div class="photos">
          <img id="belize" src="img/belize.jpg">
        </div>
        <h3>Belize is absolutly beautiful!</h3>
        <p>One of my favorite things about traveling is learning about the history and culure of the places I visit.
          Belize has a rich history with Mayan ruins and other archaeological sites, cave exploring, fishing and the
          list goes on and on. I would
          highly recommend a trip to the islands of the Carribean.</p>
      </div>
    </div>
    <div class="footer">
      <footer>
        <?php include 'modules/footer.php'; ?>
      </footer>
    </div>
    <script src="scripts/main.js"></script>
  </body>

</html>