<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIGICLASS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/element.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/codebase/dhtmlxcalendar.css" />
    <script src="js/codebase/dhtmlxcalendar.js"></script>

    <script>
        var myCalendar;

        function doOnLoad() {
            myCalendar = new dhtmlXCalendarObject(["cal_1", "cal_2", "cal_3", "cal_4", "cal_5", "cal_6", "cal_7", "cal_8"]);
        }
    </script>
</head>

<style>
    .navbar-header {
        color: green;
    }

    h4 {
        color: white;
        padding-left: 200px;
    }

    .container {
        padding-bottom: 0px;
        margin-bottom: 0px;
    }

    /* body {
        overflow: hidden;
    } */

    #container {
        display: inline-block;
        /* establish flex container */
        flex-direction: column;
        /* default value; can be omitted */
        flex-wrap: inherit;
        /* default value; can be omitted */
        justify-content: space-between;
        /* switched from default (flex-start, see below) */
        background-color: lightyellow;
    }
    
    #container>div {
        margin-top: 80px;
        margin-left: 10px;
        width: 400px;
        height: 200px;
        background-color: darkslateblue;
    }
</style>

<body onLoad="doOnLoad();">
    <section id="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: darkblue;">
            <!-- Brand and toggle gset grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="font-size: 15px;padding-left: 5px; ">DIGICLASS</a>
                <h4 style="padding-top: 4px;">Jl. Rambutan No.46 Rt 003/001, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519
                </h4>
                <h4 style="padding-top: 4px;">No Telp : (0811-9999-879)</h4>
            </div>
        </nav>
    </section>

        <div id="container">
            <div style="width: 200px;height: 25px;">
                <center>
                    <h5 style="color: white;">Jadwal</h5>
                </center>
            </div>
            <div style="width: 259px;height: 131px; margin-top: 5px;"></div>
            <div style="width: 259px;height: 131px; margin-top: 5px;"></div>
            <div style="width: 259px;height: 131px; margin-top: 5px;"></div>
            <div style="width: 259px;height: 131px; margin-top: 5px;"></div>
            <div style="width: 259px;height: 131px; margin-top: 5px;"></div>

        </div>
    </div>
    
</body>

</html>