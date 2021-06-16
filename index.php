<html>
  <head>
    <!-- headerinfo contains libraries, frameworks, titles, etc.-->
    <?php require('scripts/headerinfo.php'); ?>
  </head>
  <body >

  <!-- Nav Menu -->
  <?php require('scripts/navmenu.php'); ?>
  <div id="choices">
  <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <article class="choice-grid">
              <section class="imagery">
                <div class="copy-container copy-container">
                  <div class="copy-wrapper">
                    <h4>Activities Avalible</h4>
                    <h5><sup>Click an activity to add it to "Activities Chosen".</sup></h>
                    <hr /> 
                    <div class="choice-container">
                      <?php require('apicall/activities.php'); ?>
                    </div>
                  </div>
                </div>
              </section>
            </article>
          </div>
          <div class="col-md">
            <article class="choice-grid">
              <section class="imagery">
                <div class="copy-container copy-container">
                  <div class="copy-wrapper">
                    <h4>Activities Chosen</h4>
                    <h5><sup>Click an activity to deselect it.</sup></h>
                    <hr /> 
                    <div class="choice-container">
                      <div class="btn-activity">
                        <button v-for="activity in activities" type="button" 
                                class="activity_button btn btn-outline-dark m-2"
                                v-bind:value= "activity.id" v-on:click="remove(activity.id)">
                          {{ activity.message }}
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </article>
          </div>
        </div>
        <article class="choice-grid">
          <section class="imagery">
            <div class="copy-container copy-container">
              <div class="copy-wrapper">
                <h4>Choose State and Submit</h4>
                <h5><sup>Search by state or leave no state selected.</sup></h5>
                <hr />
                <div class="container-fluid">
                  <form action="results.php" method="post">
                    <!-- Note: This input box is utilized to send the information gathered from
                        the list of activities handled with vue to pass to php. -->
                    <?php require('scripts/states.php'); ?>
                    <input type="text" name="activitiesID" v-bind:value= "activitiesList" hidden>
                    <input type="submit" class="btn btn-submit mt-2">                    
                  </form>
                  </div>
              </div>
            </div>
          </section>
        </article>  
        </div> 
    </div>

    <!-- Loads vue framework code for the index.php file -->
    <?php require('scripts/vuecode/vueindex.php'); ?>

    <!-- Loads Footer -->
    <?php require('scripts/footer.php'); ?>
    
  </body>
</html>