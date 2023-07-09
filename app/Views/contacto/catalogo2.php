<div class="card" style="width: 18rem;">
  <?php 
    if ($numero == 0) {
  ?>

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
  <?php
    }
    elseif ($numero == 1) {
  ?>
      <div class="card-body">
    <h5 class="card-title">Card 1</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card 1</h6>
    <p class="card-text">Elegiste la carta 1. Eres el elegido :3</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>

  <?php
    }
  ?>
</div>