
<?php include_once 'header.php'; ?>

<main class="content-wrapper">
  <header class="white-text-container section-container">
    <div class="text-center">
      <h1><a href="/" style="text-decoration : none">Nishant Gerald</a></h1>
      <p>Full-time Engineer; Part-time small-talker</p>
      <p>
          <a class="fa-icon fa-icon-2x" href="https://www.facebook.com/nishant.gerald/" title="">
            <i class="fa fa-facebook"></i>
          </a>
        <a class="fa-icon fa-icon-2x" href="https://www.linkedin.com/in/nishantgerald/" title="">
          <i class="fa fa-linkedin"></i>
        </a>
        <a class="fa-icon fa-icon-2x" href="https://www.instagram.com/geraldnishant/" title="">
          <i class="fa fa-instagram"></i>
        </a>
        <a class="fa-icon fa-icon-2x" href="https://github.com/nishantgerald/" title="">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </header>



<!-- Add your site or app content here -->
 
 <div class="container">
   <div class="row">
     <div class="col-xs-12">

        <div id="intro" class="card">
          <div class="card-block">
            <h2>About me</h2>
            <div class="row">
              <div class="col-md-4">
                <p><img src="/assets/images/IMG_2673.jpg" class="img-responsive" alt=""></p>
              </div>
              <div class="col-md-8">

              <p>My name is Nishant and I am a Bioinformatics Engineer at <a href="https://www.gdit.com/" target="_blank">General Dynamics Information Technology</a> supporting the <a href="http://cdc.gov/" target="_blank">Centers for Disease Control and Prevention's (CDC)</a> Scientific Computing and Bioinformatics Support team</p>
              <p>Current Hobbies:</p>
              <ul>
                <li>Hiking</li>
                <li>Soccer</li>
                <li>Listening to Podcasts (NPR >>> everything)</li>
                <li>Automating mundane tasks</li>
                <li>Investing in new technology</li>
              </ul>  
              </div>
            </div>
          </div>
        </div>

        <!-- CONTACT FORM -->
        <div id="contact" class="card">
          <div class="card-block">
            <h2>Leave a note for me</h2>
            <form action="https://formspree.io/f/xvovzpeq" method="POST" class="reveal-content" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="Name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="Email Address" placeholder="Email address">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="Subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" name="Enter your message" placeholder="Enter your message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class=" btn btn-primary">Send message</button>
              </div>
            </form>
          </div>
        </div>
        
        <!-- LIVERPOOL CALENDAR -->
        <div class="card" id="liverpool-calendar">
          <div class="card-block">
            <div class="video-container">
            <h2>Liverpool Gameday Calendar</h2>
            <iframe src="https://calendar.google.com/calendar/embed?src=dpqj0f4137m5brcrar1jn1vs64%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
        </div>

     </div>
   </div>
 </div>

</main>
<?php include_once 'footer.php'; ?>

</html>
