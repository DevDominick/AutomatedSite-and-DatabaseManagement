<!DOCTYPE html>
<html>
  <head>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-dark-mode@2.0.0/bootstrap-dark-mode.min.css" integrity="sha384-4s4ZiKLsTxfTtFb8MMcSzC9fDzvNuAKLdN/Z/uDR7V/LCvPM/2KjIKMyzrF/7VrB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <!-- Container for form -->
    <body class="bg-dark">
    <div class="container my-5">
      <!-- Form -->
      <form action="server/run_script.php" method="post" class="bg-dark text-light p-5">
      <!-- Form group -->
      <div class="form-group">
        <!-- Form label -->
        <label for="sitename" class="text-light">Enter Site Name:</label>
        <!-- Form input -->
        <input type="text" class="form-control bg-secondary text-light" id="sitename" name="sitename" placeholder="Enter Site Name">
      </div>
      <!-- Form submit button -->
      <input type="submit" class="btn btn-primary" value="Generate Site">
    </form>
    </div>
    
<!-- Link to Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
