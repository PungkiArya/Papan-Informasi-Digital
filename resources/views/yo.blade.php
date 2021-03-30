<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="{{asset ('img/logodigiclass.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!------ Include the above in your HEAD tag ---------->
    <title>DIGICLASS</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url("{{asset ('img/wp1836699.jpg') }}");
        overflow: hidden;
    }

    .item {
        background-color: aqua;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .item:nth-child(even) {
        background-color: pink;
    }

    h5 {
        color: rgb(8, 243, 78);
        -webkit-text-stroke: 3px rgb(240, 145, 2);
        text-shadow: 4px 4px 10px rgb(255, 155, 5),
            4px 4px 20px rgba(37, 5, 17, 0.4),
            4px 4px 30px rgb(248, 247, 248),
            4px 4px 40px rgba(4, 241, 4, 0.4);
    }

    a {
        text-shadow: blue;
        font-size: 20px;
        text-align: center;
        margin-left: 20px;
        color: rgb(19, 117, 134);
        -webkit-text-stroke: 3px rgb(19, 117, 134);
        text-shadow: 4px 4px 10px rgba(58, 49, 58, 0.4),
            4px 4px 20px rgba(228, 225, 236, 0.4),
            4px 4px 30px rgba(202, 186, 195, 0.4),
            4px 4px 40px rgba(185, 178, 190, 0.4);
    }

    #watch {
        color: rgb (0, 255, 254);
        -webkit-text-stroke: 3px rgb(8, 243, 78);
        text-shadow: 4px 4px 10px rgba(165, 24, 170, 0.4),
            4px 4px 20px rgba(48, 11, 134, 0.4),
            4px 4px 30px rgba(114, 20, 72, 0.4),
            4px 4px 40px rgba(96, 1, 160, 0.4);
    }

    .container-fluid {
        color: azure;
        border: 5px orange solid;
        display: grid;
        height: 80vh;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 0.2fr 1.5fr 1.2fr 0.8fr;
        grid-template-areas:

            "sidebar main main marker"
            "sidebar content1 content2 content3"
            "sidebar content1 content2 content3"
            "sidebar content1 content2 content3";
        grid-gap: 0.3rem;
    }

    nav {
        background-image: url("{{asset ('img/header.jpg') }}");
    }


    main {
        background-color: transparent;
        grid-area: main;
    }

    #marker {
        background-color: rgba(185, 178, 190, 0.4);
        height: 275px;
        border-style: inset;
        border-width: 7px;
        border-color: coral;
    }

    #sidebar {
        background-image: url("{{asset ('img/event.jpg') }}");
        grid-area: sidebar;
        text-align: center;
        padding-left: 2px;
        margin-left: 0px;
        border-style: inset;
        border-width: 7px;
        border-color: coral;
    }

    #content1 {
        background-color: rgba(185, 178, 190, 0.4);
        grid-area: content1;
    }

    #content2 {
        background-color: rgba(185, 178, 190, 0.4);
        grid-area: content2;
    }

    #content3 {
        background-color: transparent;
        grid-area: content3;
    }

    h6 {
        text-align: center;
        margin-top: 30%;
        font-style: italic;
        border-style: solid;
        animation: animate 3s linear infinite;
    }

    @keyframes animate {

        0%,
        100% {
            color: rgb(238, 243, 247);
            filter: blur(4px);
        }

        5%,
        95% {
            color: rgb(9, 238, 150);
            filter: blur(0px);
        }
    }

    img {
        padding-top: 0px;
        border-style: inset;
        border-width: 7px;
        border-color: coral;
    }

    h1 {
        border-style: double;
        font-style: oblique;
    }

    iframe {
        border-style: inset;
        border-width: 7px;
        border-color: coral;
    }
</style>

<script>
    // Initialize and add the map
    function initMap() {
        // The location of digiclass
        const digiclass = {
            lat: -6.411806690554475,
            lng: 106.78073992773878
        };
        // The map, centered at digiclass
        const map = new google.maps.Map(document.getElementById("marker"), {
            zoom: 13,
            center: digiclass,
        });
        // The marker, positioned at digiclass
        const marker = new google.maps.Marker({
            position: digiclass,
            map: map,
        });
    }
</script>

<body>

    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand h1" href="#"> <img src="{{asset ('img/logodigiclass.png') }}" alt="" width="40" height="38" style="margin-top: 0%;padding-top: 0%;margin-left: 0%;border-style: none;">Digiclass</a>
            <marquee behavior="--title--" direction="left">
                <h5>Jl. Rambutan No.46 Rt 003/001, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519
                </h5>
            </marquee>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#newsMenu" type="button" aria-controls="newsMenu" aria-expanded="false" aria-label="Toggler navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </section>

    <div class="container-fluid">


        <main>
            <iframe width="755" height="275" src="https://www.youtube.com/embed/A9KNjrrAg-c?autoplay=1&controls=1&loop=1&playlist=A9KNjrrAg-c&amp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </main>

        <div id="marker"></div>

        <div id="sidebar">
            <h1>Event</h1>
            <marquee scrollamount="2" direction="up">
                <h6>Magang Batch IV Start 8 Maret 2021</h6>
                <h6>Pendaftaran Magang Guru Sertifkasi BNSP Start 5 April 2021</h6>
                <h6>Magang Batch V Start 15 Maret 2021</h6>
            </marquee>
        </div>
        <div id="content1">
            <img class="mySlides w3-animate-fading" src="{{asset ('img/cr.png') }}" style="width: 370px;height: 340px;">
            <img class="mySlides w3-animate-fading" src="{{asset ('img/logodigiclass.png') }}" style="width: 370px;height: 340px;">
            <img class="mySlides w3-animate-fading" src="{{asset ('img/photo_2021-03-08_07-26-25.jpg') }}" style="width: 370px;height: 340px;">
            <img class="mySlides w3-animate-fading" src="{{asset ('img/logodigiclass.png') }}" style="width: 370px;height: 340px;">
        </div>
        <div id="content2">
            <img src="{{asset ('img/cr.png') }}" alt="" width="380" height="340">
        </div>
        <div id="content3">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23be7f11&amp;ctz=Asia%2FJakarta&amp;src=YXJ5YXRhbWFwdW5na2lAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=Y2xhc3Nyb29tMTA4OTU4MjY3NDUwODY1NTQ4ODQ3QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%237986CB&amp;color=%230B8043&amp;color=%23202124&amp;title=Digiclass%20Today&amp;hl=id" style="border:solid 1px #777" width="370" height="340" scrolling="no"></iframe>
        </div>
    </div>

    <!-- --footer-- -->
    <div class="footer" style="margin-top: 0px;padding-top: 0px;height: 4vh;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="clock"></div>
            <a class="navbar-brand h1" href="#" style="text-align: center;">
                <img src="{{asset ('img/logodigiclass.png') }}" alt="" width="30" height="24" style="margin-top: 0%;padding-top: 0%;margin-left: 0%;border-style: none;">Digiclass
                <div id="watch">
                </div>
            </a>
            <marquee behavior="--title--" direction="left">
                <h5>Visi |
                    Menjadi pusat rujukan bersertifikasi untuk pengembangan dan Pemasaran marketing digital yang Profesional, Kredibel dan akuntabel

                    Misi |

                    Menyelenggarakan Sertifikasi Di Bidang Digital Marketing yang di akui Kredibilitasnya baik di Dunia Pendidikan dan Dunia Industri</h5>
            </marquee>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#newsMenu" type="button" aria-controls="newsMenu" aria-expanded="false" aria-label="Toggler navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            function clock() {
                var now = new Date();
                var secs = ('0' + now.getSeconds()).slice(-2);
                var mins = ('0' + now.getMinutes()).slice(-2);
                var hr = now.getHours();
                var Time = hr + ":" + mins + ":" + secs;
                document.getElementById("watch").innerHTML = Time;
                requestAnimationFrame(clock);
            }

            requestAnimationFrame(clock);
        });
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2500);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAIA28O1hliCLvQMwoj35xBmVX0kLVXp0&callback=initMap&libraries=&v=weekly" async></script>
</body>

</html>