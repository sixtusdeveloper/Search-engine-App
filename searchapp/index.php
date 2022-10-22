<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/7c5a9b010c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
    <title>Search Engine Application</title>
  </head>
  <body>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 m-auto">
         <h3 class="text-center mb-3">
          <i class="fas fa-flag-usa"></i>State Capital lookup
         </h3>

         <div class="form-group">
          <input type="search" id="search" class="form-control form-control-lg" placeholder="Enter state name or abbreviation...">
         </div>
          <div id="match-list"></div>
        </div>
      </div>
    </div>  

    <script src="./JS/app.js"></script>
  </body>
</html>
