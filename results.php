<html>
    <head>
        <!-- headerinfo contains libraries, frameworks, titles, etc.-->
        <?php require('scripts/headerinfo.php'); ?>
    </head>
    <body style="background: white;">  
        <!-- style contains CSS code -->

        <!-- Nav Menu -->
        <?php require('scripts/navmenu.php'); ?>

        <div>
          <div class="container-fluid">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Activities List</li>
                  </ol>
                </nav>
                <h6>Click Button to View Activities</h6>
                <hr />
          </div>
          
          <!-- Activities list is loaded here -->
          <div class="container-fluid">
            <?php require('apicall/query.php'); ?>
          </div>
        </div>

        <!-- Loads Footer -->
        <?php require('scripts/footer.php'); ?>

    </body>
</html>