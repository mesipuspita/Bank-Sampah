<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Balita</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
						<?php
						$tBalita = mysqli_query($db, "select count(*) as totalBalita from penduduk where (year(now()) - year(tglLahir)) <= 5");
						while($totalBalita = mysqli_fetch_array($tBalita)) {
							echo $totalBalita['totalBalita'] . " orang";
						}
						?>
					  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-baby fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Produktif</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  <?php
						  $tProduktif = mysqli_query($db, "select count(*) as totalProduktif, pekerjaan from penduduk where (year(now()) - year(tglLahir)) BETWEEN 18 AND 59");
						  while($totalProduktif = mysqli_fetch_array($tProduktif)) {
							  echo $totalProduktif['totalProduktif'] . " orang";
						  }
						  ?>
						  </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
