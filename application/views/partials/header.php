<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?></title>
    <!-- cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="shortcut icon" href="<?= base_url() . $imgUrl ?>" type="image/x-icon">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url("/assets/css/main.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/flip/flip.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/clock.css") ?>">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body onload="startTime()">
    <header class="p-3 shadow mb-4">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="me-3"><img src="<?= base_url("assets/img/logo-tasik.svg") ?>" alt="" class="w-100" /></div>
                <div class="me-3"><img src="<?= base_url() . $imgUrl ?>" alt="" class="w-100" /></div>
                <div>
                    <h3 class="fw-semibold">
                        <?= $header ?>
                    </h3>
                </div>
            </div>
            <div>
                <div class="tick" data-did-init="handleTickInit">
                    <div data-layout="horizontal fit">
                        <span data-key="hours" data-transform="pad(00)" data-view="flip"></span>
                        <span data-view="text" data-key="sep" class="tick-text-inline"></span>
                        <span data-key="minutes" data-transform="pad(00)" data-view="flip"></span>
                        <span data-view="text" data-key="sep" class="tick-text-inline"></span>
                        <span data-key="seconds" data-transform="pad(00)" data-view="flip"></span>
                    </div>
                </div>
                <!-- <div id="txt" class="fw-bold fs-3"></div>

                <script>
                    function startTime() {
                        const today = new Date();
                        let h = today.getHours();
                        let m = today.getMinutes();
                        let s = today.getSeconds();
                        m = checkTime(m);
                        s = checkTime(s);
                        document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                        setTimeout(startTime, 1000);
                    }

                    function checkTime(i) {
                        if (i < 10) {
                            i = "0" + i
                        }; 
                        return i;
                    }
                </script> -->
            </div>
        </div>
    </header>