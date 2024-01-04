 <main>
      <div class="container-fluid">
        <div class="row g-2">
          <!-- 1 -->
          <div class="col-md-4">
            <div class="card card-border">
              <div class="tops bgtops-kelom py-1 px-4 fw-bold">
                Total Kemiskinan Per Kategori
              </div>
              <div class="card-body">
                <!-- CHART CONTAINER -->
                <div class="row g-2 mb-3">
                  <div class="col-md-12">
                    <div class="card card-inner-goso shadow">
                      <div
                        class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100"
                      >
                        <p style="font-size: 14px">
                          Akumulasi Kemiskinan Kota Tasikmalaya <br />
                          <span class="fw-bold" style="font-size: 20px">
                            40,55</span
                          >KK
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-inner-goso shadow">
                      <div
                        class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100"
                      >
                        <p style="font-size: 14px">
                          Sangat Miskin <br />
                          <span class="fw-bold" style="font-size: 20px">
                            40,55</span
                          >KK
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-inner-goso shadow">
                      <div
                        class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100"
                      >
                        <p style="font-size: 14px">
                          Miskin <br />
                          <span class="fw-bold" style="font-size: 20px">
                            40,55</span
                          >KK
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-inner-goso shadow">
                      <div
                        class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100"
                      >
                        <p style="font-size: 14px">
                          Rentan Miskin <br />
                          <span class="fw-bold" style="font-size: 20px">
                            40,55</span
                          >KK
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-inner-goso shadow">
                      <div
                        class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100"
                      >
                        <p style="font-size: 14px">
                          Tidak Miskin <br />
                          <span class="fw-bold" style="font-size: 20px">
                            40,55</span
                          >KK
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <div id="chart"></div>
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
                    colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
                    series: [44, 55, 41, 17],
                    labels: [
                      "Sangat Miskin",
                      "Miskin",
                      "Rentan Miskin",
                      "Tidak Miskin",
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
          <!-- 2 -->
          <div class="col-md-4">
            <div class="card card-border">
              <div class="tops bgtops-kelom py-1 px-4 fw-bold">
                Kemiskinan Berdasarkan Lokasi
              </div>
              <div class="card-body">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126622.26510674809!2d108.15035201449113!3d-7.359974472024886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f56e5924c576f%3A0x301e8f1fc2f2500!2sKota%20Tasikmalaya%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1704349912309!5m2!1sid!2sid"
                  width="100%"
                  height="600px"
                  style="border: 0; border-radius: 4px"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="col-md-4">
            <div class="card card-border">
              <div class="tops bgtops-kelom py-1 px-4 fw-bold">
                Akumulasi data Kemiskinan Per Kecamatan
              </div>
              <div class="card-body">
                <!-- CHART CONTAINER -->
                <div>
                  <div id="charts"></div>
                </div>

                <script>
                  var options = {
                    chart: {
                      foreColor: "#ffffff",
                      stacked: true,
                      stackType: "100%",
                      type: "bar",
                      height: 500,
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
                    colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
                    series: [
                      {
                        name: "Sangat Miskin",
                        data: [10, 33, 55, 65, 22, 54, 23, 22, 14, 57],
                      },
                      {
                        name: "Miskin",
                        data: [23, 24, 54, 66, 22, 54, 54, 23, 42, 75],
                      },
                      {
                        name: "Rentan Miskin",
                        data: [22, 30, 45, 36, 22, 54, 34, 33, 44, 65],
                      },
                      {
                        name: "Tidak Miskin",
                        data: [10, 33, 55, 65, 22, 54, 23, 22, 14, 57],
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
                      width: 1,
                      colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
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
                    document.querySelector("#charts"),
                    options
                  );
                  chart.render();
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>