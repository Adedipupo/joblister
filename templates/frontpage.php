<?php include 'inc/header.php'; ?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="container"> 
   <div class="jumbotron"> 
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

 <?php foreach ($jobs as $job) : ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php echo $job->job_title; ?></h2>
        <p><?php echo $job->description ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>   
  </div>
  <?php endforeach ; ?>

</main>

<?php include 'inc/footer.php'; ?>