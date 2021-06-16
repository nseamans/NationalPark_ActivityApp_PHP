National Park Activity App

Allows users to search avalibility of activities at national parks based on location. 
Languages used included JavaScript, PHP, and CSS. Utilizes such frameworks, libraries, and
api's as Vue.js, BootStrap 5, and the National Parks API. 

File Structure
1) Index.php
  Initial file. Utilizes Vue.js to allow users to add and subtract activities to a list.
  This list is stored as a form entry and submitted to PHP. Utilizes the file activities.php
  to perform the api call to query the avalible activities. States are stored in a file entitled
  states.php.
2) Results.php
  Obtains a list of parks that match the activities and states presented by Index.php. This information
  is feed into the file query.php which calls the the parks api. A table of each activity is presented
  showcasing either all the parks containing the activity or the activities in specific states. For example
  all the snowboarding opertunities in the National Park system or only the opertunities to snowboard in
  Alaska. 
3) Parkresults.php
  Presents info on a state park if selected through the results in Results.php. Utilizes parkquery.php
  to query the api and present information including images of the park, a description, and contact details,
  and a weather description. 
