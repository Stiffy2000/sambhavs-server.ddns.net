var active = "";
function setActive(toSet) {
	active = toSet;
}
var header = `<head>
    <link rel="stylesheet" type="text/css" href="/css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="innerNav">
    <div class="topnav" id="topnav">
        <a id="home" href="/" target="_top">Home</a>
        <a id="news" href="/news.html" target="_top">News</a>
        <a id="projects" href="/projects.html" target="_top">Projects</a>
        <a id="about" href="/about.html" target="_top">About</a>
        <a id="status" href="/status.html" target="_top">Status</a>
        <a id="articles" href="/blog" target="_top">Articles</a>
        <a id="login" href="/nextcloud" target="_top">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
var aHome     = document.getElementById("home");
var aNews     = document.getElementById("news");
var aProjects = document.getElementById("projects");
var aAbout    = document.getElementById("about");
var aStatus   = document.getElementById("status");
var aArticles = document.getElementById("aArticles");
var aLogin    = document.getElementById("login");

var topList = [aHome, aNews, aProjects, aAbout, aStatus, aArticles, aLogin];

var urlParams = new URLSearchParams(window.location.search);
var i;
for(i=0; i < topList.length; i++) {
    if (topList[i].id == "` + active + `") {
        topList[i].className="active";
    }
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("topnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

    </script>
</body>`;

