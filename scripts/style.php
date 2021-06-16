<style>
  /*
    - Colors -
    Background : #FAF9F6;
    Menu 1: #374785;
    Menu 2: #24305E;
    Button none-hoover: #6D6D64
    Button hoover: #CCCCCC
    
    - Fonts -
    font-family: 'Cormorant', serif;
    font-family: 'Inter', sans-serif;

    - Box Shadows -
    l1: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    l2: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    l3: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    l4: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    l5: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  */


  body {
    overflow: scroll; 
  }

  p, h1, h2, h3, h4, h5, h6{
    color: #333333;
  }

  .headercustom li {
    font-family: 'Inter', sans-serif !important;
    text-transform: lowercase;
  }

  .headercustom h3 {
    font-family: 'Inter', sans-serif !important;
    font-weight: bold;
    color: #CD6487;
  }

  .headercustom h3:first-letter {
    text-transform: uppercase !important;
  }

  .hero__image{
    margin: auto;
    -webkit-font-smoothing: antialiased;
    background: url('https://media.tacdn.com/media/attractions-content--1x-1/0b/28/59/9e.jpg') no-repeat center fixed; 
    filter: grayscale(100%);    
    background-size: cover;
    height: 3em;
  }


  .navbar {
    font-family: 'Inter', sans-serif !important;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  }

  .dropdown-menu {
    border-radius: 0px !important;
    background: #292b2c !important;
    border-style: none !important;
  }

  .dropdown-item:hover {
    color: white !important;
    background: #292b2c !important;
  }

  .activity_button{
    outline-style: none !important;
    background: white;
    border-radius: 0px;
    width: 250px;
    text-align: right !important;
    margin-top: 1%;
    margin-left: 1%;
  }

  .form-select{
    border-radius: 0px;
    margin-right: 1em;
  }

  .btn-submit{
    font-family: 'Inter', sans-serif !important;
    font-size: large;
    text-align: right;
    background: #292b2c !important;
    color: white;
    border-radius: 0px;
    min-width: 100%;
  }.btn-submit:hover{
    background: white !important;
    color: #292b2c;
  }

  .btn{
    text-align: left;
    border-radius: 0px;
    width: 15em;
  }

  .btn-crumb{
    background: none;
    border: none;
    padding: 0;
    font: inherit;
    outline: inherit;
  }

  /* Choice Container */

  .about__info {
    padding: 2.5em;
    height: 75em !important;
    /* background: #292b2c !important; */
  }

  .about__info h1 {
    padding-top: .25em;
    padding-left: 0.25em;
    font-family: 'Inter', sans-serif !important;
    color: #292b2c;
    max-height: 20em !important;
  }

  .about__info p {
    max-width: 70ch;
    font-size: 1rem;
    line-height: 1.5;
    font-family: 'Inter', sans-serif !important;
    padding-bottom: .25em;
  }

  .grid-container {
    max-height: 15em !important;
  }

  .choice-grid{
    margin-top: .5em;
    margin-bottom: .5em;
  }

  .imagery {
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    margin-top: 2em;
    display: flex;
    overflow: hidden !important;
  }

  .copy-wrapper {
      font-family: 'Inter', sans-serif !important;
      padding-left: .5em;
      padding-top: 1em;
  }

  .copy-wrapper *+* {
    margin-top: 1rem;
  }

  .image-wrapper img {
    max-width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .copy-container {
    flex-shrink: 0;
    flex: 75%;
  }

  .choice-container{
    height: 15em !important;
    overflow-y: scroll !important;
    overflow-x: none;
    padding-top: 1em;
    padding-bottom: 1em;
    margin-bottom: 1em;
  }

  .link-custom {
    color: #4B47A8;
    font-family: 'Montserrat', sans-serif !important;
    font-size: 75%;
    text-decoration: none;
    line-height: 110%;
  }

  .link-custom:hover {
    color: #2F885D;
    padding-left: 2em;
  }

  .parkactiviteslist{
    max-height: 7.5em;
    overflow-y: scroll;
  }

  /* Leaflet Custom Css*/
  #mapid { 
    height: 15em; 
  }
</style>