<main>
      <div class="container-fluid">
        <div class="row g-2">
          <!-- data1 -->
          <div class="col-md-5">
            <div class="card card-border shadow">
              <div class="tops bgtops-bageur py-1 px-4 fw-bold">Akumulasi Bantuan Bageur</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-inner-goso">
                      <div class="p-1 textin">
                        <p class="text-center">
                          <span class="fs-6">Bantuan Tersalurkan</span>
                          <br />
                          <span class="fw-bold fs-5">28071</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-inner-goso">
                      <div class="p-1 textin">
                        <p class="text-center">
                          <span class="fs-6">Barang Tersalurkan</span>
                          <br />
                          <span class="fw-bold fs-5">28071</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <!-- CHART CONTAINER -->
                        <div>
                          <div id="chart"></div>
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
                            colors: ["#57AFA9", "#F9C74F"],
                            series: [
                              {
                                name: "Bantuan Tersalurkan",
                                data: [10, 33, 55, 65, 22, 54, 23, 22, 14, 57],
                              },
                              {
                                name: "Barang Tersalurkan",
                                data: [23, 24, 54, 66, 22, 54, 54, 23, 42, 75],
                              },
                            ],
                            xaxis: {
                              categories: [
                                "Data 1",
                                "Data 2",
                                "Data 3",
                                "Data 4",
                                "Data 5",
                                "Data 6",
                                "Data 7",
                                "Data 8",
                                "Data 9",
                                "Data 10",
                              ],
                            },
                            stroke: {
                              show: true,
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
                                  formatter: function () {
                                    return "";
                                  },
                                },
                              },
                            },
                          };

                          var chart = new ApexCharts(
                            document.querySelector("#chart"),
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
          <!-- data2 -->
          <div class="col-md-4">
            <div class="card card-border shadow">
              <div class="tops bgtops-bageur py-1 px-4 fw-bold">
                Bantuan Tersalurkan Berdasarkan Lokasi
              </div>
              <div class="card-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126622.26510674809!2d108.15035201449113!3d-7.359974472024886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f56e5924c576f%3A0x301e8f1fc2f2500!2sKota%20Tasikmalaya%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1704349912309!5m2!1sid!2sid" width="100%" height="500px" style="border:0;border-radius: 4px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <!-- data3 -->
          <div class="col-md-3">
            <div class="card card-border shadow">
              <div class="tops bgtops-bageur py-1 px-4 fw-bold">
                Categori Barang Tersalurkan
              </div>
              <div class="card-body">
                <section class="splide" id="splideBageur" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) :
                                    ?>
                                        <li class="splide__slide">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row g-1 textin">
                                                       
                                                        <div class="col-md-12">
                                                            <p class="text-center">
                                                                <span style="font-size: 20px">Kangkung</span>

                                                                <br />
                                                                <span class="fw-bold fs-5">21443</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endfor;
                                    ?>
                                </ul>
                            </div>
                        </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>