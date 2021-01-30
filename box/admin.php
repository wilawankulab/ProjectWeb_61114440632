<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-analytics.js"></script>
    <title>Review</title>
      <link rel="icon" href="img/R.png" type="image/x-icon">

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

      <!-- main css -->
      <link href="css/style.css" rel="stylesheet">


      <!-- modernizr -->
      <script src="js/modernizr.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="img/logoo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
          </header>
          <nav>
              <ul class="box-primary-nav">
                <li><a href="page1.html">หมูกระทะ</a></li>
                <li><a href="page2.html">ชาบู</a></li>
                <li><a href="admin.php">รีวิวจากผู้เข้าชม</a></li>




                  <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                  <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                  <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                  <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
              </ul>
          </nav>
      </div>

    <div class="top-bar">
        <h1>รีวิวจากผู้เข้าชม</h1>
    </div>

      <div class="container main-container clearfix">
    <div class="col-md-6">

      <h5>คำรีวิวต่างๆของแต่ละร้านจากผู้เข้าชม</h5>
      <div class="h-30"></div>
        <p id = "comment1"></p>
    </div>
  </div>
    <script>

        // Your web app's Firebase configuration

        var firebaseConfig = {
          apiKey: "AIzaSyCunav6ym7I_k9iW3X0-zC31zLsGEiU0L8",
          authDomain: "recomend-fde93.firebaseapp.com",
          databaseURL: "https://recomend-fde93.firebaseio.com",
          projectId: "recomend-fde93",
          storageBucket: "recomend-fde93.appspot.com",
          messagingSenderId: "315863403021",
          appId: "1:315863403021:web:dd21d3cb7ccab2305de344",
          measurementId: "G-7VTFS2RYLM"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        const db = firebase.firestore();
        db.collection("mu1")
        .onSnapshot(function(sth) {
            //var source = doc.metadata.hasPendingWrites ? "Local" : "Server";
            console.log(" data: ", sth);
        });
      </script>
</head>

<body>
<p id = "Sname"></p>
    <p id = "comment1"></p>
    <script>
         db.collection("<?php echo $_GET['store']?>").get().then(snapshot => {
        snapshot.docs.forEach(doc => {

            document.getElementById("comment1").innerHTML += ("ชื่อ :"+doc.data().name+"<br>"+"email :"+doc.data().email+"<br>"+"comment :"+doc.data().message+"<br>"+"-----------------------------"+"<br>");


        });

    });

    document.getElementById("comment1").innerHTML = "<?php echo $_GET['store']."<br>"?>"
    </script>
    <script src = "mu1admin.js"></script>


  <!-- footer -->
<footer>
      <div class="container-fluid">
          <p class="copyright">WILAWAN KULAB</p>
      </div>
</footer>
  <!-- end footer -->

  <!-- back to top -->
  <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
  <!-- end back to top -->



  <!-- jQuery -->
  <script src="js/jquery-2.1.1.js"></script>
  <!--  plugins -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/animated-headline.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <!--  custom script -->
  <script src="js/custom.js"></script>

  <!-- google analytics  -->
  <script>
      (function (i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function () {
              (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
              m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-76796224-1', 'auto');
      ga('send', 'pageview');
  </script>

</body>

</html>
