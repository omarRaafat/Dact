<!DOCTYPE html>

<html>

<style>

    body, html {

        height: 100%;

        margin: 0;

    }



    .bgimg {

        background-image: url('https://yada.org/wp-content/uploads/2016/11/coming-soon-1.png');

        height: 100%;

        background-position: center;

        background-size: cover;

        position: relative;

        color: white;

        font-family: "Courier New", Courier, monospace;

        font-size: 25px;
 
    }



    .topleft {

        position: absolute;

        top: 0;

        left: 16px;

    }



    .bottomleft {

        position: absolute;

        bottom: 0;

        left: 16px;

    }



    .middle {

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);

        text-align: center;

    }



    hr {

        margin: auto;

        width: 40%;

    }



    .header-brand-img{

        height: 10%;

        line-height: 2rem;

        vertical-align: bottom;

        margin: 0 auto;

        width: 10%;



    }

</style>

<body>



<div class="bgimg">

    <div class="topleft">

        <img src="/images/logo.png" class="header-brand-img" alt="">

    </div>

    <div class="">

        

        <hr>

        <p id="demo" style="font-size:30px; margin-left: 690px;margin-top: 100px"></p>
   <hr>

    </div>

    <div class="bottomleft">

        <p>Dact Academy &copy; 2020. All rights reserved.</p>

    </div>

</div>



<script>

    // Set the date we're counting down to

    var countDownDate = new Date("Feb 17, 2020 15:37:25").getTime();



    // Update the count down every 1 second

    var countdownfunction = setInterval(function() {



        // Get todays date and time

        var now = new Date().getTime();



        // Find the distance between now an the count down date

        var distance = countDownDate - now;



        // Time calculations for days, hours, minutes and seconds

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));

        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        var seconds = Math.floor((distance % (1000 * 60)) / 1000);



        // Output the result in an element with id="demo"

        document.getElementById("demo").innerHTML = days + "d " + hours + "h "

            + minutes + "m " + seconds + "s ";



        // If the count down is over, write some text

        if (distance < 0) {

            clearInterval(countdownfunction);

            document.getElementById("demo").innerHTML = "EXPIRED";

        }

    }, 1000);

</script>



</body>

</html>

