<main>
    <div class="container-fluid">
        <div class="row g-2">
            <!-- side 1 -->
            <div class="col-md-8">
                <div class="card card-border shadow">
                    <div class="tops bgtops-goso py-1 px-4 fw-bold">
                        Akumulasi Sampah Terserap
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <!-- statistic -->
                            <div class="col-md-4">
                                <div class="card card-inner-goso mb-3">
                                    <div class="card-body textin">
                                        <div class="d-flex justify-content-between border-bottom border-light mb-2">
                                            <p>Total:</p>
                                            <p class="text-end">
                                                <span class="fw-bold" style="font-size: 20px"><?= number_format($totalData, 2, '.', ',') ?></span>/kg
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom border-light mb-2">
                                            <p>Bulan ini:</p>
                                            <p class="text-end">
                                                <span class="fw-bold" style="font-size: 20px">
                                                    <?php
                                                    foreach ($bulanini as $data) {
                                                        echo number_format($data['total_jumlah'], 2, '.', ',');
                                                    }
                                                    ?>
                                                </span>/kg
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom border-light mb-2">
                                            <p>Hari ini:</p>
                                            <p class="text-end">
                                                <span class="fw-bold" style="font-size: 20px">
                                                    <?php
                                                    foreach ($hariIni as $data) {
                                                        echo number_format($data['lapsam_jumlah'], 2, '.', ',');
                                                    }
                                                    ?>
                                                </span>/kg
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 -->
                                <div class="mb-3">
                                    <div class="card card-inner-goso">
                                        <div class="card-body">
                                            <div class="row g-1 textin align-items-center">
                                                <div class="col-md-12 text-center">
                                                    Tertinggi Kecamatan
                                                </div>
                                                <?php
                                                foreach ($kecamatanTertinggi as $items) :
                                                ?>
                                                    <div class="col-6 border-end border-white" style="font-size: 14px;">
                                                        <?= $items['nama_kecamatan'] ?>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <div class="fw-bold" style="font-size: 20px">
                                                            <span class="counter"><?= number_format($items['total_jumlah'], 2, '.', ',') ?>
                                                            </span>
                                                        </div>
                                                        /kg
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="mb-3">
                                    <div class="card card-inner-goso">
                                        <div class="card-body">
                                            <div class="row g-1 textin align-items-center">
                                                <div class="col-md-12 text-center">
                                                    Tertinggi Kelurahan
                                                </div>
                                                <?php
                                                foreach ($kelurahanTertinggi as $items) :
                                                ?>
                                                    <div class="col-6 border-end border-white" style="font-size: 14px;">
                                                        <?= $items['nama_kelurahan'] ?>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <div class="fw-bold" style="font-size: 20px">
                                                            <span class="counter"><?= number_format($items['total_jumlah'], 2, '.', ',') ?>
                                                            </span>
                                                        </div>
                                                        /kg
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- chart -->
                            <div class="col-md-8">
                                <div class="card card-inner-goso">
                                    <div class="card-body">
                                        <div>
                                            <div id="chartall"></div>
                                        </div>

                                        <script>
                                            var options = {
                                                chart: {
                                                    foreColor: "#ffffff",
                                                    type: "area",
                                                    height: 450,
                                                    toolbar: {
                                                        show: true,
                                                    },
                                                },
                                                dataLabels: {
                                                    enabled: true,
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        barHeight: "100%",
                                                        horizontal: true,
                                                        dataLabels: {
                                                            position: "bottom",
                                                        },
                                                    },
                                                },
                                                colors: ["#64CC2C"],
                                                fill: {
                                                    type: 'gradient',
                                                },
                                                series: [{
                                                    name: "Penyemaian",
                                                    data: [<?php
                                                            foreach ($content as $data) {
                                                                echo ($data['total_jumlah'] . ',');
                                                            } ?>],
                                                }, ],
                                                xaxis: {
                                                    categories: [<?php
                                                                    foreach ($content as $data) {
                                                                        echo ('"' . $data['tanggal'] . '",');
                                                                    } ?>],
                                                },
                                                stroke: {
                                                    show: true,
                                                    width: 3,
                                                    colors: ["#64CC2C"],
                                                },
                                                tooltip: {
                                                    theme: "dark",
                                                    x: {
                                                        show: false,
                                                    },
                                                    y: {
                                                        title: {
                                                            formatter: function() {
                                                                return "";
                                                            },
                                                        },
                                                    },
                                                },
                                            };

                                            var chart = new ApexCharts(
                                                document.querySelector("#chartall"),
                                                options
                                            );
                                            chart.render();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- side 2 -->
            <div class="col-md-4">
                <div class="card card-border shadow">
                    <div class="tops bgtops-goso py-1 px-4 fw-bold">
                        Sampah Terserap Per Kecamatan
                    </div>
                    <div class="card-body">
                        <div class="row g-2">

                            <!-- chart -->
                            <div class="col-md-12">
                                <div class="card card-inner-goso">
                                    <div class="card-body">

                                        <div class="dataChart">
                                            <?php
                                            foreach ($dataPerkecamatan as $data) :
                                            ?>
                                                <div>
                                                    <p class="fw-bold fs-5"><?= $data['nama_bulan'] ?></p>
                                                    <div id="<?= str_replace(' ', '', $data['nama_bulan']) ?>"></div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.dataChart').slick({
                                                    infinite: true,
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1,
                                                    autoplay: true,
                                                    autoplaySpeed: 2000,
                                                    arrows: false,
                                                });
                                            });
                                        </script>

                                        <script>
                                            <?php foreach ($dataPerkecamatan as $data) : ?>
                                                <?php
                                                // Remove spaces from $data['nama_bulan'] for chart ID
                                                $chartId = str_replace(' ', '', $data['nama_bulan']);
                                                ?>
                                                try {
                                                    var options<?= $chartId ?> = {
                                                        chart: {
                                                            foreColor: "#ffffff",
                                                            type: "bar",
                                                            height: 450,
                                                            toolbar: {
                                                                show: true,
                                                            },
                                                        },
                                                        dataLabels: {
                                                            enabled: true,
                                                        },
                                                        plotOptions: {
                                                            bar: {
                                                                barHeight: "100%",
                                                                horizontal: false,
                                                                dataLabels: {
                                                                    position: "bottom",
                                                                },
                                                            },
                                                        },
                                                        colors: ["#56B4E9"],
                                                        fill: {
                                                            type: 'gradient',
                                                        },
                                                        series: [{
                                                            name: "data",
                                                            data: [
                                                                <?php
                                                                foreach ($data['details'] as $dataDetails) {
                                                                    echo ($dataDetails['lapsam_jumlah'] . ',');
                                                                }
                                                                ?>
                                                            ],
                                                        }, ],
                                                        xaxis: {
                                                            categories: [
                                                                <?php
                                                                foreach ($data['details'] as $dataDetails) {
                                                                    echo ('"' . $dataDetails['name'] . '",');
                                                                }
                                                                ?>
                                                            ],
                                                        },
                                                        stroke: {
                                                            show: true,
                                                            width: 1,
                                                            colors: ["#56B4E9"],
                                                        },
                                                        tooltip: {
                                                            theme: "dark",
                                                            x: {
                                                                show: false,
                                                            },
                                                            y: {
                                                                title: {
                                                                    formatter: function() {
                                                                        return "";
                                                                    },
                                                                },
                                                            },
                                                        },
                                                    };

                                                    var chart<?= $chartId ?> = new ApexCharts(
                                                        document.querySelector("#<?= $chartId ?>"),
                                                        options<?= $chartId ?>
                                                    );

                                                    chart<?= $chartId ?>.render();
                                                } catch (error) {
                                                    console.error('Error initializing chart ' + <?= $chartId ?> + ':', error);
                                                }
                                            <?php endforeach; ?>
                                        </script>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>