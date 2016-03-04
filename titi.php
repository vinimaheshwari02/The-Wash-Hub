

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />

    <link href="./styles/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../dist/css/lightbox.min.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.4.js"></script>
  
   
    <style>
        .sam {
            margin-top:300px;
        }
        .carousel-inner > .item > img {
            margin: 30px 30px 30px 40px;
            width: 700px;
            height: 350px;
        }

        #my-carousel {
            width: 800px;
            height: 400px;
            margin-top: 20px;
            margin-left: 10%;
        }

        #tranparent {
            margin-top: 100px;
        }

        body {
            background-image: url("10.jpg");
           

        }
        body .img{

        }

        background-image {
            opacity: 0.8;
        }

        #what {
            background-color: aliceblue;
            color: aqua;
        }

        #p {
            background-color: #98AFC7;
        }

        #pa {
            background-color: #98AFC7;
            margin-top: 100px;
        }

        div.transbox {
            margin: 20px;
            background-color: dimgray;
            width: 170px;
            border: 1px;
            opacity: 0.5;
            filter: alpha(opacity=60); /* For IE8 and earlier */
        }

        .transbox > h1 {
            color: black;
        }

        #p1 {
            position: relative;
        }

        #c1 {
            position: relative;
            color: black;
            z-index: 5;
            top: 32px;
        }

        #bg1 {
            position: absolute;
            top: 80%;
            left: 0px;
            width: 100%;
            height: 25%;
            background-color: blue;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .15;
        }

        #c2 {
            position: relative;
            color: black;
            z-index: 5;
            top: 25px;
        }

        #bg2 {
            position: absolute;
            top: 10%;
            left: 0px;
            width: 100%;
            height: 93%;
            background-color: blue;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .15;
        }

        #pc {
            position: relative;
            color: black;
            z-index: 5;
            top: 20px;
        }

        #pg {
            position: absolute;
            top: 25%;
            left: 0px;
            width: 80%;
            height: 130%;
            margin-left: 10%;
            margin-right: 30%;
            background-color: blue;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .15;
        }

        #plc {
            position: relative;
            color: black;
            z-index: 5;
            top: 50px;
            margin-left: 5%;
        }

        #plb {
            position: absolute;
            top: 25%;
            left: 0px;
            width: 80%;
            height: 80%;
            margin-left: 10%;
            margin-right: 30%;
            background-color: blue;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .15;
        }

        #tc {
            position: relative;
            color: black;
            z-index: 5;
            top: 25px;
        }

        #tb {
            position: absolute;
            top: 25%;
            left: 0px;
            width: 90%;
            height: 240%;
            margin-left: 7%;
            margin-right: 30%;
            background-color: blue;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .15;
        }

        #tab {
            margin-top: 5%;
            margin-left: 30%;
        }

            #tab a:hover {
                background: #96a4f3;
                color: black;
            }

        #courb {
            position: absolute;
            top: 15%;
            left: 0px;
            width: 23%;
            height: 68%;
            margin-left: 7%;
            margin-right: 30%;
            background-color: #808080;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .4;
        }

        #cb {
            position: absolute;
            top: 25%;
            left: 0px;
            width: 65%;
            height: 70%;
            margin-left: 15%;
            margin-right: 30%;
            background-color: blue;
            z-index: 1;
            /* These three lines are for transparency in all browsers. */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            opacity: .15;
        }

        #cc {
            position: relative;
            color: black;
            z-index: 5;
            top: 37px;
            margin-left: 5%;
        }

        .fa-facebook:hover {
            color: black;
        }

        .fa-linkedin:hover {
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1 style="color:#4b4343;font-size:400%;font-family:Arial, Helvetica, sans-serif;"><b>The <br />Wash Hub</b></h1>
            </div>
            <div class="col-sm-8">
                <ul class="nav nav-tabs" id="tab">
                    <li class="active" id="h"><a data-toggle="tab" href="#home"><h4>Home</h4></a></li>
                    <li><a data-toggle="tab" href="#Process"><h4>Process</h4></a></li>
                    <li><a data-toggle="tab" href="#Price"><h4>Price List</h4></a></li>
                    <li><a data-toggle="tab" href="#TC"><h4>T&C</h4></a></li>
                    <li><a data-toggle="tab" href="#Contact"><h4>Contact</h4></a></li>

                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">



                <div class="col-md-12">
                    <div id="my-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#my-carousel" data-slide-to="1"></li>
                            <li data-target="#my-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">

                            <div class="item active">
                                <img class="img-responsive center-block" src="11.jpg" alt="First slide">

                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="12.jpg" alt="First slide">

                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="13.jpg" alt="First slide">

                            </div>
                        </div>
                        <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#my-carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                        <div class="container-fluid">
                            <div class="background" id="courb"></div>
                            <div class="content" style="position:absolute; top:50px;left:70px;">
                                <h1 style="color:white;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                                    <b>
                                        Become a <br />Memeber<br />and get<br />a price as <br />
                                        low as 8*<br />per piece
                                    </b>
                                </h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="p1">
                    <div class="content" id="c1">
                        <div class="row">
                            <div class="col-sm-4">
                                <h1><span class="label label-info">What we do</span></h1>
                            </div>
                            <div class="col-sm-8">
                                <p style="text-align:end;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:large;">
                                    <b>
                                        Deliver Crisp & Clean Laundry at the Convenience of your Doorstep.<br />
                                        Make you spend time at home to relax and have fun with family Provide freedom from laundry,
                                        every weekend as those are meant for family, friends & fun, not for accumulated clothes that need washing.<br />
                                        Relax and leave your laundry worries to The Wash Hub for washing dirty clothes.
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="background" id="bg1"></div>
                </div>



                <div class="container-fluid" id="p1">
                    <div class="content" id="c2">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="eco1.jpg" style="margin:30px 30px 30px 25px;" />

                            </div>
                            <div class="col-sm-8">

                                <div style="margin-left:100px;">
                                    <h2 style="color:#15451b;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-size:300%">
                                        <b>Eco Friendly</b>
                                    </h2>

                                    <h3 style="color:black;"><b> We are committed to the environment:</b></h3>

                                    <ul typeof="circle">
                                        <li style="font-family:Arial;font-size:150%;"><b> No use of harmful toxic chemicals</b></li>
                                        <li style="font-family:Arial;font-size:150%;"><b>Safe for you and your garments</b></li>
                                        <li style="font-family:Arial;font-size:150%;"><b> Safe for the environment</b></li>
                                        <li style="font-family:Arial;font-size:150%;"><b>Garments look cleaner, last longer, feel softer, look brighter and smell fresher</b></li>
                                        <li style="font-family:Arial;font-size:150%;"><b>No allergic reactions</b></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background" id="bg2"></div>
                </div>


            </div>

            <div id="Process" class="tab-pane fade">
                <section>

                    <div>
                        <div class="content" id="pc">

                            <div class="container-fluid text-center">
                                <div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/1.png" data-lightbox="example-set"> <img class="example-image" src="dist/images/1.png" /></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/2.png" data-lightbox="example-set"><img class="example-image" src="dist/images/2.png" /></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/3.png" data-lightbox="example-set"> <img class="example-image" src="dist/images/3.png" /></a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/4.png" data-lightbox="example-set"> <img class="example-image" src="dist/images/4.png" /></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/5.jpg" data-lightbox="example-set"> <img class="example-image" src="dist/images/5.jpg" /></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/6.png" data-lightbox="example-set"><img class="example-image" src="dist/images/6.png" /></a>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/7.png" data-lightbox="example-set"><img class="example-image" src="dist/images/7.png" /></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/8.png" data-lightbox="example-set"><img class="example-image" src="dist/images/8.png" /></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="example-image-link" href="dist/images/9.png" data-lightbox="example-set">  <img class="example-image" src="dist/images/9.png" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="background" id="pg"></div>
                    </div>

                </section>
            </div>
            <div id="Price" class="tab-pane fade">
                <div class="content" id="plc">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-7">
                                <img src="price.jpg" />
                            </div>
                            <div class="col-sm-5">
                                <h2 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b>Try  @ 99 </b></h2>

                                <h4 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        Number of Garments in trial is limited<br /> to 8
                                        in the first visit.
                                    </b>
                                </h4>
                                <h2 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"><b>Plans are Like</b></h2>

                                <h4 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        Individuals - 500 per month 50 garments
                                        1 day per week is fixed & 1 visit on request
                                        5* visits per month
                                    </b>
                                </h4>
                                <h4 style="text-align:left;color:#573333;font-family:Arial;"><b>Family/Group - 1000 per Month 110 Garments</b></h4>
                                <h4 style="text-align:left;color:#573333;font-family:Arial;"><b>2 days per week is fixed & 2 visit on request </b></h4>

                                <h4 style="text-align:left;color:#573333;font-family:Arial;"><b>10* visits per month</b></h4>
                                <br />
                                <h4 style="text-align:left;color:#573333;font-family:Arial;"><b>There after 8.5 Per piece.</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" id="plb"></div>
            </div>
            <div id="TC" class="tab-pane fade">
                <div class="content" id="tc">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="tc.jpg" />
                            </div>
                            <div class="col-sm-8">
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Terms and Condition</h3>

                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        Rest assured, your satisfaction is our first priority. In fact,
                                        we treat your laundry as if it were our own, however we still need to
                                        agree to some rules to ensure that there are no misunderstandings about
                                        The Wash Hub (referred to as "we," "us," "our", or "TheWashHub.com") or your obligations.
                                        By using our service, you acknowledge and accept the following Terms and Conditions.
                                    </b>
                                </h5>
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Laundry Terms</h3>

                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        Suitability for Laundering<br />

                                        By using our service, you agree that your clothes are suitable to be washed in water, on a normal cycle,
                                        and dried using heat in a tumble dryer. We cannot be responsible for any damage to clothing that is not suitable
                                        for this standard laundering process.

                                        Damaged Laundry<br />

                                        We will do everything we can to avoid damaging your laundry. Unfortunately there are limitations to what we can do. For example,
                                        we don't have time to check your pockets to see if you have left anything in them. Therefore, we can't be held responsible if
                                        something left in your laundry (like lipstick, chewing gum, or a pen) causes any damage. Similarly, if you call and tell us
                                        that you left your favorite bracelet, or anything else, in your pocket, we can’t guarantee that we will find or return it.<br />

                                        All laundering processes, regardless of how gentle, cause normal wear and tear on clothing. As a result, we cannot be responsible
                                        for any wear and tear of laundry, including loss of buttons, fading, fatiguing, holes, or abrasions. Similarly, we reserve
                                        the right to decline cleaning any particular piece of laundry if we think it will lead to trouble.<br />

                                        Cleaning and drying laundry also creates other risks. We do not individually examine every garment prior to placing it in the
                                        laundry. Therefore, if something is "dry-clean only," or otherwise unsuitable for common washing and drying techniques,
                                        please do not include it in the laundry you give to us. Along the same lines, we can't be held responsible for the
                                        re-disposition of colors (aka bleeding) or dimensional changes (aka shrinking or stretching).
                                    </b>
                                </h5>
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                                    Lost Laundry
                                </h3>
                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        We would love to be able to inventory every piece of laundry you give us.
                                        Unfortunately, it is cost-prohibitive for us to do so. As a result we can't be held responsible for any lost laundry;
                                        we simply have no efficient way of verifying that we actually received any particular piece of laundry in the first place.<br />

                                        Rest assured though, we carefully track your clothes. For instance, we tag all our bundles with your name,
                                        and your clothes are never loose in our facility unless they’re inside a machine, on the folding table,
                                        or in their own laundry cart waiting to be folded.<br>

                                        If you do believe you are missing something from your delivery, please notify us within
                                        24 hours of receiving your clean clothes — we are much more likely to find misplaced laundry if it is reported early.
                                        General Terms for All Services
                                    </b>
                                </h5>
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                                    Scheduling and Payment
                                </h3>

                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        If you no longer want our service, simply let us know and we will cancel it.
                                        Although we truly hope you are satisfied with our services, once we have laundered your clothes, we cannot offer a refund.<br />
                                        To make life simpler, we have customized bags which you have to purchase once and all your laundry will be picked & delivered
                                        in bag/bags provided by us. If you have exceeded your monthly limit we will promptly notify you of any surcharge.
                                        Of course we don't anticipate having any problems with customers refusing to pay an appropriate surcharge, but just in case,
                                        we reserve the right to hold your laundry hostage until we are paid in full.
                                    </b>
                                </h5>
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Minimum Fee</h3>
                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        If you schedule us to come to pick-up your laundry,
                                        we have a minimum quantity per pick-up of 10 pieces, regardless of whether or not you give us laundry
                                        to wash. Remember, you're free to cancel any appointment at any time, so if you don't have any laundry for
                                        us to wash on a particular scheduled visit, please be sure to notify us 2 hours before your appointment time
                                        so we don't come to your address or charge you this fee.
                                    </b>
                                </h5>
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                                    Pick-up and Delivery Scheduling
                                </h3>
                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        We will do our best to pick-up your laundry at the agreed upon time. We know that we won't have very many customers
                                        if we are late. That being said, we can't be held accountable if we are late for unforeseen circumstances.
                                        Similarly, we hope that you will strive to be on-time for our deliveries. If we/you do miss a pick-up or delivery,
                                        we will try to coordinate an alternate time as soon as possible.<br />
                                        Unattended Pick-up and Delivery<br />
                                        If you request that we leave your laundry unattended (e.g., on your porch, in a hallway, or in your foyer)
                                        or with a third party (e.g., with a doorman or a neighbor), we are not responsible for your laundry
                                        before we have picked it up or after we have dropped it off. You also agree that our records of pick-up and
                                        drop-off times are true and accurate.
                                    </b>
                                </h5>
                                <h3 style="text-align:left;color:black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                                    Allergies
                                </h3>
                                <h5 style="text-align:left;color:#573333;font-family:Arial;">
                                    <b>
                                        We use the best available detergents & after wash for all our personal laundry customers.
                                        However, we do wash clothes in shared washing machines where other detergents may have been used, and
                                        it is possible that small amounts of other detergents, which may not be same quality, may not be completely
                                        rinsed out of these washing machines. So any allergies due to any chemical reaction to the garment can’t be guaranteed.<br />
                                        Miscellaneous<br />
                                        As our business changes, we may want to modify some of terms in this agreement. Therefore, we encourage you to check back frequently
                                        to familiarize yourself with any changes.<br />
                                        Although we think we are generally agreeable people, we recognize that The Wash Hub
                                        and you may have a dispute. In this event, you agree that any legal action pertaining to this agreement, or The Wash Hub generally,
                                        shall be conducted in the Courts of the Ludhiana.
                                    </b>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" id="tb"></div>
            </div>

            <div id="Contact" class="tab-pane fade">
                <div class="content" id="cc">
                    <div class="container-fluid text-center">

                        <div class="row">
                            <div class="col-sm-5">


                                <p><span class="glyphicon glyphicon-phone" style="font-size:x-large;color:white;"></span><b style="font-size:x-large">: +91-98888-71752 </b> <br /><b style="margin-left:9%;font-size:x-large;">+91-98888-71762</b></p>
                                <br />
                                <p style="margin-left:17%;">
                                    <span class="glyphicon glyphicon-envelope" style="font-size:x-large;color:white;"></span> <b style="font-size:x-large">:  care@thewashhub.com </b>
                                    <br /><br />
                                    <b style="margin-left:10%;font-size:large;">For partnership Queries</b>
                                    <b style="margin-left:10%;font-size:x-large;">partner@thewashhub.com</b>
                                    <br /><br />
                                    <b style="margin-left:10%;font-size:large;">For Corporate Queries</b>
                                    <b style="margin-left:10%;font-size:x-large;">corporate@thewashhub.com</b>
                                </p><br /><br />
                                <p style="font-size:x-large;">
                                    FOLLOW US:&thinsp;
                                    <a href="#" style="color:white;font-size:x-large;"><i class="fa fa-lg fa-facebook"></i></a>&thinsp;&thinsp;&thinsp;
                                    <a href="#" style="color:white;font-size:x-large;"><i class="fa fa-lg fa-linkedin"></i></a>
                                </p>
                            </div>

                            
                                <div class="col-sm-7">
                                    <form class="form-horizontal" role="form" method="POST" action="">
                                        <div class="form-group" style="width:60%;margin-left:5%;">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                        </div>

                                        <div class="form-group" style="width:60%;margin-left:5%;">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                        </div>
                                        <div class="form-group" style="width:60%;margin-left:5%;">
                                            <input class="form-control" id="name" name="Number" placeholder="Number" type="text" required>
                                        </div>
                                        <div class="form-group" style="width:60%;margin-left:5%;">
                                            <textarea class="form-control" id="comment" name="message" placeholder="Message" rows="5"></textarea><br>
                                        </div>
                                        <div class="form-group">

                                            <div id="messages" style="width:60%;margin-left:5%;"></div>
                                        </div>

                                        <div class="col-sm-12 form-group" style="width:60%;margin-left:8%;">
                                            <input type="submit" class="btn btn-default pull-right" name="form" value="Submit"/>                                        </div>
                                    </form>

</div>
                            
                        </div>
                    </div>
                </div>

                <div class="background" id="cb"></div>
            </div>

        </div>
        </div>
        

        <script type="text/javascript" src="./scripts/jquery.min"></script>
        <script src="./scripts/bootstrap.min.js"></script>
        <script src="../dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
