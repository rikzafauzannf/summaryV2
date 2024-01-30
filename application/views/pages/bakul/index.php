<!-- hotel resto terlibat marque, jumlah makanan tersakur di ambil dari periodik mingguan [chart bar], jumlah makanan tersalur kecamatan & jenis penerima [pieChart] -->

<main>
  <div class="container-fluid">
    <div class="row mt-3 g-1">
      <div class="col-md-8">
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Jumlah Data BakulTasik</div>
          <div class="card-body">
            <div class="row g-2">
              <div class="col-md-4">
                <div class="card-inner shadow mb-3">
                  <div class="p-2 text-center">
                    <p>
                      Pertisipan
                      <br />
                      <span class="fw-bold fs-5">15</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-inner shadow mb-3">
                  <div class="p-2 text-center">
                    <p>
                      Jumlah Penyaluran Bantuan
                      <br />
                      <span class="fw-bold fs-5">2580</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="tops bgtops-bakul py-1 px-4 fw-bold">Jumlah Box Tersalurkan</div>
                  <div class="card-body">
                    <!-- CHART CONTAINER -->
                    <div class="dataChart">
                      <!-- miggu 1 -->
                      <div>
                        <h5>Minggu 1: 1 Januari - 5 januari 2024</h5>
                        <div id="chart1"></div>
                      </div>
                      <div>
                        <h5>Minggu 1: 1 Januari - 5 januari 2024</h5>
                        <div id="chart2"></div>
                      </div>
                      <!-- minggu 1 -->
                      <!-- minggu 2 -->
                      <div>
                        <h5>Minggu 2: 6 Januari - 12 januari </h5>
                        <div id="chart3"></div>
                      </div>
                      <div>
                        <h5>Minggu 2: 6 Januari - 12 januari </h5>
                        <div id="chart4"></div>
                      </div>
                      <!-- minggu 2 -->
                      <!-- minggu 3 -->
                      <div>
                        <h5>Minggu 3: 13-19 Januari</h5>
                        <div id="chart5"></div>
                      </div>
                      <div>
                        <h5>Minggu 3: 13-19 Januari</h5>
                        <div id="chart6"></div>
                      </div>
                      <!-- minggu 3 -->

                      <!-- minggu 4 -->
                      <div>
                        <h5>Minggu 4: 20-24 Januari</h5>
                        <div id="chart7"></div>
                      </div>
                      <div>
                        <h5>Minggu 4: 20-24 Januari</h5>
                        <div id="chart8"></div>
                      </div>
                      <!-- minggu 4 -->
                    </div>

                    <script>
                      $(document).ready(function() {
                        $('.dataChart').slick({
                          infinite: true,
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          autoplay: true,
                          autoplaySpeed: 4000,
                          arrows: false,
                        });
                      });
                    </script>

                    <script>
                      // minggu 1
                      var options1 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [18, 10, 15, 20, 25, 35, 10, 10],
                        }, ],
                        xaxis: {
                          categories: [
                            "AMARIS",
                            "ASTON",
                            "CORDELA",
                            "GRAND METRO",
                            "HARMONI",
                            "HORISON",
                            "MANGKUBUMI HOTEL",
                            "RAMAYANA",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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

                      var options2 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [25, 8, 5, 5, 12, 5, 0],
                        }, ],
                        xaxis: {
                          categories: [
                            "SANTIKA",
                            "SAMUDRA CATERING",
                            "SARI ALAM",
                            "SAUNG POJOK DADAHA",
                            "SILIWANGI CATERING",
                            "SOTO PATARUMAN",
                            "WARUNG NASI 2 TAX",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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

                      // minggu 2
                      var options3 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [35, 14, 21, 24, 35, 35, 10, 10],
                        }, ],
                        xaxis: {
                          categories: [
                            "AMARIS",
                            "ASTON",
                            "CORDELA",
                            "GRAND METRO",
                            "HARMONI",
                            "HORISON",
                            "MANGKUBUMI HOTEL",
                            "RAMAYANA",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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

                      var options4 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [51, 8, 5, 5, 12, 5, 0],
                        }, ],
                        xaxis: {
                          categories: [
                            "SANTIKA",
                            "SAMUDRA CATERING",
                            "SARI ALAM",
                            "SAUNG POJOK DADAHA",
                            "SILIWANGI CATERING",
                            "SOTO PATARUMAN",
                            "WARUNG NASI 2 TAX",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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
                      // minggu 3
                      var options5 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [35, 14, 23, 28, 35, 35, 10, 10],
                        }, ],
                        xaxis: {
                          categories: [
                            "AMARIS",
                            "ASTON",
                            "CORDELA",
                            "GRAND METRO",
                            "HARMONI",
                            "HORISON",
                            "MANGKUBUMI HOTEL",
                            "RAMAYANA",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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

                      var options6 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [49, 8, 5, 5, 12, 5, 0],
                        }, ],
                        xaxis: {
                          categories: [
                            "SANTIKA",
                            "SAMUDRA CATERING",
                            "SARI ALAM",
                            "SAUNG POJOK DADAHA",
                            "SILIWANGI CATERING",
                            "SOTO PATARUMAN",
                            "WARUNG NASI 2 TAX",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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

                      // minggu 4
                      var options7 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [20, 10, 14, 20, 25, 25, 0, 6],
                        }, ],
                        xaxis: {
                          categories: [
                            "AMARIS",
                            "ASTON",
                            "CORDELA",
                            "GRAND METRO",
                            "HARMONI",
                            "HORISON",
                            "MANGKUBUMI HOTEL",
                            "RAMAYANA",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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

                      var options8 = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "bar",
                          height: 400,
                          toolbar: {
                            show: true,
                          },
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val, opts) {
                            return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
                          },
                          offsetY: -20, // Menentukan posisi label data
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
                        colors: ["#56E965"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [31,0,0,0,0,0,0],
                        }, ],
                        xaxis: {
                          categories: [
                            "SANTIKA",
                            "SAMUDRA CATERING",
                            "SARI ALAM",
                            "SAUNG POJOK DADAHA",
                            "SILIWANGI CATERING",
                            "SOTO PATARUMAN",
                            "WARUNG NASI 2 TAX",
                          ],
                        },
                        stroke: {
                          show: false,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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


                      var chart1 = new ApexCharts(
                        document.querySelector("#chart1"),
                        options1
                      );
                      chart1.render();

                      var chart2 = new ApexCharts(
                        document.querySelector("#chart2"),
                        options2
                      );
                      chart2.render();

                      var chart3 = new ApexCharts(
                        document.querySelector("#chart3"),
                        options3
                      );
                      chart3.render();

                      var chart4 = new ApexCharts(
                        document.querySelector("#chart4"),
                        options4
                      );
                      chart4.render();

                      var chart5 = new ApexCharts(
                        document.querySelector("#chart5"),
                        options5
                      );
                      chart5.render();

                      var chart6 = new ApexCharts(
                        document.querySelector("#chart6"),
                        options6
                      );
                      chart6.render();

                      var chart7 = new ApexCharts(
                        document.querySelector("#chart7"),
                        options7
                      );
                      chart7.render();

                      var chart8 = new ApexCharts(
                        document.querySelector("#chart8"),
                        options8
                      );
                      chart8.render();
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- data slide -->
      <div class="col-md-4">
        <div class="card card-border mb-4">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Jenis Penerima BOX</div>
          <div class="card-body">
            <div>
              <div id="charte"></div>
            </div>

            <script>
              var options = {
                chart: {
                  foreColor: "#ffffff",
                  type: "pie",
                  height: 600,
                  toolbar: {
                    show: true,
                  },
                },
                dataLabels: {
                  enabled: true,
                  formatter: function(val) {
                    return Math.round(val);
                  },
                  style: {
                    fontSize: '18px', // Set the font size here
                  },
                },
                // colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
                series: [516, 516, 516, 516, 516],
                labels: [
                  "Lansia : 516",
                  "Disabilitas : 516",
                  "ODGJ : 516",
                  "Warga Miskin : 516",
                  "Korban Bencana : 516",
                ],
                stroke: {
                  show: false,
                  width: 1,
                  colors: ["#fff"],
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
                document.querySelector("#charte"),
                options
              );
              chart.render();
            </script>
            <!-- <section class="splide" id="splide" aria-labelledby="carousel-heading">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                  for ($i = 1; $i <= 10; $i++) :
                  ?>
                    <li class="splide__slide">
                      <div class="card shadow">
                        <div class="card-body">
                          <p class="text-center">
                            <span style="font-size: 20px">RM Paddang</span>

                            <br />
                            <span class="fw-bold fs-6">21443</span>
                          </p>
                        </div>
                      </div>
                    </li>
                  <?php endfor; ?>
                </ul>
              </div>
            </section> -->
          </div>
        </div>

        <!-- chart -->
        <div class="card card-border mb-4">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Data BOX perbulan </div>
          <div class="card-body">
            <div id="chartBulan"></div>
          </div>
        </div>
        <script>
          var optionsBulan = {
            chart: {
              foreColor: "#ffffff",
              type: "bar",
              height: 300,
              toolbar: {
                show: true,
              },
            },
            dataLabels: {
              enabled: true,
              formatter: function(val, opts) {
                return val + " BOX"; // Menambahkan label "BOX" pada setiap nilai
              },
              offsetY: -20, // Menentukan posisi label data
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
            colors: ["#56E965"],
            series: [{
              name: "BOX Perbulan",
              data: [852, 852, 894],
            }, ],
            xaxis: {
              categories: [
                "November 2023",
                "Desember 2023",
                "Januari 2023",
              ],
            },
            stroke: {
              show: false,
              width: 4,
              colors: ["#57AFA9", "#F9C74F"],
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


          var chartBulan = new ApexCharts(
            document.querySelector("#chartBulan"),
            optionsBulan
          );
          chartBulan.render();
        </script>

        <!-- slide gambar  -->
        <!-- <div class="card card-border mb-4">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Partisipan Hotel </div>
          <div class="card-body">
            <div class="partisipan w-100">
              <?php
              for ($i = 1; $i <= 9; $i++) :
              ?>
                <div><img src="<?= base_url('/assets/partisipan/hotel-' . $i . '.png') ?>" alt="" class="w-75"></div>
              <?php
              endfor;
              ?>
            </div>

          </div>
        </div>
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Partisipan Rumah Makan </div>
          <div class="card-body">
            <div class="partisipan w-100">
              <?php
              for ($i = 1; $i <= 6; $i++) :
              ?>
                <div><img src="<?= base_url('/assets/partisipan/rm-' . $i . '.png') ?>" alt="" class="w-75"></div>
              <?php
              endfor;
              ?>
            </div>

          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('.partisipan').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
          });
        });
      </script> -->
        <!-- data slide -->
        <!-- <div class="col-md-2">
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Partisipan Hotel</div>
          <div class="card-body">
            <div class="card-inner shadow mb-3">
              <div class="p-2 text-center">
                <p>
                  Jumlah Makanan
                  <br />
                  <span class="fw-bold fs-5">18</span>
                </p>
              </div>
            </div>
            <section class="splide" id="splidee" aria-labelledby="carousel-heading">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                  for ($i = 1; $i <= 10; $i++) :
                  ?>
                    <li class="splide__slide">
                      <div class="card shadow">
                        <div class="card-body">
                          <p class="text-center">
                            <span style="font-size: 20px">HORISON</span>

                            <br />
                            <span class="fw-bold fs-6">21443</span>
                          </p>
                        </div>
                      </div>
                    </li>
                  <?php endfor; ?>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div> -->
      </div>
    </div>
</main>