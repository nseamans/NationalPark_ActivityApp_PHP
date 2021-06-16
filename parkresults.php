<html>
    <head>
        <!-- headerinfo contains libraries, frameworks, titles, etc.-->
        <?php require('scripts/headerinfo.php'); ?>
    </head>
    <body style="background: white;">  
        <!-- style contains CSS code -->

        <!-- Nav Menu -->
        <?php require('scripts/navmenu.php'); ?>

        <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <button type="button" 
                            class="btn-crumb btn-link"
                            onclick="window.history.back();">
                      Activities List
                    </button>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Park Info</li>
                </ol>
              </nav>
              <?php require('apicall/parkquery.php'); ?>
        </div>

        <!-- Loads Footer -->
        <?php require('scripts/footer.php'); ?>
    </body>
</html>