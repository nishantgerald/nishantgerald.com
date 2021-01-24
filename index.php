
<?php include_once 'header.php'; ?>

<main class="content-wrapper">
  <header class="white-text-container section-container">
    <div class="text-center">
      <h1><a href="/" style="text-decoration : none">Nishant Gerald</a></h1>
      <p>Full-time Bioinformatics Engineer; Part-time small-talker</p>
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

              <p>My name is Nishant and I am a Bioinformatics Engineer at <a href="https://www.gdit.com/">General Dynamics Information Technology</a> supporting the <a href="http://cdc.gov/">Centers for Disease Control and Prevention's (CDC)</a> Scientific Computing and Bioinformatics Support team</p>
              <p>You can find some of the things I'm passionate about on this page - from <a href="#covid">Public Health Dashboards</a> to <a href="/videos">Videos</a> to <a href="#liverpool-calendar">Liverpool FC</a></p>
              <p>Current Hobbies:</p>
              <ul>
                <li>Hiking</li>
                <li>Soccer</li>
                <li>Listening to Podcasts (NPR >>> everything)</li>
                <li>Making mediocre music on my iPAD</li>
                <li>Practicing automations</li>
                <li>Working on my website</li>
              </ul>  
              </div>
            </div>
          </div>
        </div>

        <div id="work" class="card">
          <div class="card-block">
            <h2>Work</h2>
            <div class="work-experience">
              <small class="date">2020 - Present</small>
              <h3 class="h5 date-title">Bioinformatics Engineer - <a href="https://www.gdit.com/" title="GDIT">General Dynamics IT</a></h3>
              <ul>
                <li><b>Linux Systems Administration:</b> Troubleshot basic infrastructure-level issues including service management, LDAP user-onboarding, SMB ACL group controls and data migrations for 100+ centOS based machines</li>
                <li><b>HPC Cluster Administration:</b> Helped users at CDC customize submissions scripts to optimize job performance on a cluster with over 120+ nodes using a UGE scheduler</li> 
                <li><b>Technical Instructor:</b> Trained and conducted seminars for over 1500 users at the CDC on topics related to Data Science in Python</li>
                <li><b>Helpdesk Management:</b> Managed Helpdesk Ticketing System - triaged tickets, troubleshooted linux, HPC and bioinformatics related issues with the client </li>
              </ul>
            </div>

            <div class="work-experience">
              <small class="date">May 2019 - August 2019</small>
              <h3 class="h5 date-title">Genomics Data Scientist - <a href="https://www.ancestry.com/" title="">Ancestry.com LLC</a></h3>
              <ul>
                <li><b>Copy Number Variant (CNV) Detection Pipeline:</b> Developed a CNV Detection Pipeline which was tested on over 15 million customer DNA samples and benchmarked it against 5 other open-source pipelines</li>
                <li><b>Helpdesk Management:</b> Created a QC Tracking tool to visualize and summarize incoming Next-Gen Sequencing QC data to easily identify faulty samples and reduce rerun costs</li>
              </ul>
            </div>
          </div>
        </div>
        

        <div class="card">
          <div class="card-block">
            <h2>Education</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="education-experience">
                  <small class="date">2018-2019</small>
                  <h3 class="h5 date-title">M.S, Bioinformatics</h3>
                  <p>Georgia Institute of Technology</p>
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="education-experience">
                  <small class="date">2014-2018</small>
                  <h3 class="h5 date-title">B.Engg, Biotechnology Engineering</h3>
                  <p>Manipal Institute of Technology</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-block">
            <h2>My photos</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="/assets/images/IMG_1511.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Just float!</h3>
                </div>
              </div>
              <div class="item">
                <img src="/assets/images/IMG_1555.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">  
                  <h3 class="h5">Sand dunes</h3>
                </div>
              </div>

              <div class="item">
                <img src="/assets/images/IMG_1236.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Day at the Park</h3>
                </div>
              </div>
            </div>

            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

          </div>
          </div>
        </div>


        <!-- CONTACT FORM -->
        <div id="contact" class="card">
          <div class="card-block">
            <h2>Contact</h2>
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
                <input type="file" name="Upload File">
              </div>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LfmsNMZAAAAABwdhNXYagMuuz-BLKMOKCITu6xA"></div>
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
       

        <!-- COVID-19 DASHBOARD -->
        <div class="card" id="covid">
          <div class="card-block">
            <div class="video-container">
            <h2>COVID Dashboard</h2>
            <iframe src="https://ourworldindata.org/coronavirus-data-explorer?tab=map&zoomToSelection=true&country=~OWID_WRL&region=World&casesMetric=true&interval=total&hideControls=true&smoothing=0&pickerMetric=location&pickerSort=asc" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
            </div>
          </div>
        </div>
       
              
        <!-- GOOGLE ANALYTICS -->
        <div class="card">
          <div class="card-block">
            <div class="video-container">
            <h2>Google Analytics</h2>
            <iframe width="600" height="700" src="https://datastudio.google.com/embed/reporting/83b83b61-dffd-4b35-b9e0-6de96ea7d94c/page/vpehB" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>

     </div>
   </div>
 </div>

</main>
<?php include_once 'footer.php'; ?>

</html>
