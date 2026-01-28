<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 3 PHP</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css" >
</head>
<body>

<main role="main">
  <?php include "header.php"; ?>
  <h1>Bienvenue sur mon site !</h1>
  <br><br>

  <h2>Example body text</h2>
  <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
  <p><small>This line of text is meant to be treated as fine print.</small></p>
  <p>The following is <strong>rendered as bold text</strong>.</p>
  <p>The following is <em>rendered as italicized text</em>.</p>
  <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
  <br><br>

  <figure class="text-end">
    <blockquote class="blockquote">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    
    </blockquote>
    <figcaption class="blockquote-footer">
      Someone famous in <cite title="Source Title">Source Title</cite>
    </figcaption>
  </figure>

  <div class="container">
      <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
      </div>
  </div>

  <br><br>

  <div class="card mb-3">
          <h3 class="card-header">Card header</h3>
          <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <h6 class="card-subtitle text-muted">Support card subtitle</h6>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
              <rect width="100%" height="100%" fill="#868e96"></rect>
              <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>
          <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
          </div>
          <div class="card-footer text-muted">
              2 days ago
          </div>
  </div>
</main>
</body>
</html>