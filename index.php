<?php
include 'header.php';
?>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Education System</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">National Examination<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">National Primary Examination</a></li>
                    <li><a href="#">National Secondary Examinations</a></li>
                  </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="schools.html">Website For Schools<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="schools.html">Primary Schools</a></li>
                    <li><button type="submit" name="submit-search" action="search.php" method="POST">Secondary Schools</button></li>
                    <li><a href="schools.php">Colleges and Universities</a></li>
                  </ul>
              </li>
            </ul>
                <form class="navbar-form navbar-right" action="search.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" name="submit-search" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Add school</a></li>
                </ul>
            </div>
        </nav>
        <div style="margin-top: 40px; margin-left: -40px;">
            <div class="container-fluid text-center">
                <div class="row content">
                    <div class="col-md-2 sidenav">
                    <div class="nav">
                            <h3 style=" padding: 5px;">Menu</h3>
                            <ul class="nav" role="menu">
                                <li><a href="#section-primary">Primary Education</a></li><hr>
                                <li><a href="#section-secondary">Secondary Education</a></li><hr>
                                <li><a href="#section-uni">Tetiary And University Education</a></li><hr>
                                  <li class="divider"></li>
                                  <li><a href="#section-news">New Curriculum</a></li>
                              </ul>
                        </div>
                    </div>
<!--    <div class="row" style="margin-top: 40px; margin-left: -70px; height: 100%; ">
        <div class="col-md-3" style="padding: 25px;">
                <div class="nav navbar-inverse">
                <h3 style="color: whitesmoke; padding: 5px;">Menu</h3>
                <ul class="nav" role="menu">
                    <li><a href="#section-primary">Primary Education</a></li>
                    <li><a href="#section-secondary">Secondary Education</a></li>
                    <li><a href="#section-uni">Tetiary And University Education</a></li>
                    <li class="divider"></li>
                    <li><a href="#section-news">New Curriculum</a></li>
                </ul>
            </div>
            </div>-->
        <div id="section-primary" class="tab-content">
            <div class="col-md-6">
                <h2 style="text-align: left;">Primary</h2>
                <section>
                    <p> Nursery Education

                        Nursery education, also known as Pre-Unit or Kindergarten, typically starts at age 5 or 6 in Kenya. It typically lasts 1 or 2 years. There are no exit exams or graduation. Each class year goes from January to December with month long breaks in April, August and December.
                        Primary Education</p>
                    <p>

                        Primary education starts at age 6 or 7. There are eight class years required to complete primary education. Each class year goes from January to December with month long breaks in April, August and December.  Most primary schools in Kenya are day schools as opposed to boarding schools.
                        At the beginning of Standard 8, students are allowed to select 4 to 6 secondary schools that they would like to attend including one national school. At the end of Standard 8, students take the Kenya Certificate of Primary Education (KCPE). This is a standardized national exam taken by all standard 8 students at the same time. Students are tested in five subjects;</p>
                    <p>
                        LANGUAGE I English Grammar, reading, comprehension and Composition writing</p>
                        <p>LANGUAGE II Kiswahili Grammar, reading, comprehension and Composition writing</p>
                       <p> MATHEMATICS</p>
                       <p> SCIENCE</p>
                        <p>SOCIAL STUDIES (History, Civics, Geography, religion)</p>
                        <p>Each subject carries a maximum of 100 marks, for a total of 500 possible marks.</p>
                        <p>They have a final national examination to determine the high school they go to.
                    </p>
                </section>
                </div>
        <div class="col-md-3">
            <section>
            <figure>
                <img src="image/300px-EuropeanNairobiSchool2.jpg" height="10%" width="100%" style="margin-top: 40px;"/>
                <figcaption>Nairobi school began in 1902.</figcaption>
            </figure>
            </section>
            <br>
            <p style="color: blue;"><strong>Did you know?</strong></p>
            <section>
            <p>In January 2003 President Mwai Kibaki re-introduced free primary education which previously existed before the mid 80s.Since 2003, education in public schools became free and compulsory ( Kenya Constitution,Article 53, 2010). On learning that primary education had once again become free in Kenya, Kimani Maruge, an uneducated farmer and the world's oldest person to enroll in primary school joined Kapkenduiywo primary school in Eldoret at the age of 84. He was elected head boy at the age of 86 in 2005.</p>
            </section>
        </div>
        </div>
                <div id="section-secondary" class="tab-content">
                    <div class="col-md-6">
                        <h2 style="text-align: left;">Secondary</h2>
                        <section>
                        <p>Secondary school education starts right after primary school education. There are government schools, private schools and Harambee schools. Government schools are broadly divided into national schools, provincial schools and district schools. Students with top tier scores in the KCPE exam, typically go to national schools.

                            There are four years in secondary school. Each class year goes from January to December with month long breaks in April, August and December. The first year is called Form one followed by form two, three and four. At the beginning of form 4, students typically select the Tertiary Education or University courses they would like to study upon completion of secondary education. At the end of form 4, students take the Kenya Certificate of Secondary Education (KCSE) exam. This is a national exam taken by all form 4 students nationally and at the same time. A students score in this exam determines whether they get to join one of the State Universities and also determines their University courses.

                            KCSE typically involves taking exams in 8 subjects. Each subject has to exam papers:  paper 1 and paer 2. For the sciences, paper 1 is the theory exam while paper 2 is the practical exam. For the language exam, paper 1 is the grammar and essay exam while paper 2 is the literature exam. Each exam lasts 2 to 4 hours. Each subject has 12 possible points for a possible total of 72 points.
                        </p>
                        </section>
                    </div>
                    <div class="col-md-3">
                        <section>
                        <figure>
                            <img src="image/Alliance_High_School_Administration_Block_-_Back_View.jpg" height="10%" width="100%" style="margin-top: 40px;"/>
                            <figcaption>Alliance High School Nairobi</figcaption>
                        </figure>
                        </section>
                    </div>
                </div>
            <div class="col-md-3">
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
	<div>
	<script>
function showRSS(str) {
  if (str.length==0) {
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>
</div>
</head>
<body>

<form>
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
<option value="NBC">NBC News</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>
</body>
</html>
