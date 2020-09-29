<?php include 'inc/header.php'; ?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="container"> 
   <div class="jumbotron"> 
      <h1>Find a Job</h1>
      <form method="GET" action="index.php">
        <select name="category" class="form-control">
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category) : ?>
            <option value="<?php echo $category->id;?><?php echo $category->name;?>"></option>
          <?php endforeach; ?>  
        </select>
      </form>
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