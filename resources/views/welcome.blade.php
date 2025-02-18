<?php
session_start(); // Start the session at the top
@include('partials.header');
?>

<body>
  <div class="layer"></div>
  <!-- ! Body -->
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">

    <?php @include('partials/navbar.php'); ?>

    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Manning Dashboard</h2>
        <div class="row stat-cards">

          <?php 
          $locations = ['Kelaniya', 'Warakapola', 'Dambulla', 'Kurunegala']; 
          foreach ($locations as $location): 
          ?>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?= $location; ?></p>
              </div>
              <div class="stat-cards-info">
                <!-- Modify the Explore button to a form submission -->
                <form method="POST" action="{{ route('explore') }}">
                  @csrf
                  <input type="hidden" name="location" value="<?= $location; ?>" />
                  <button type="submit" class="cssbuttons-io-button">
                    EXPLORE
                    <div class="icon">
                      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                      </svg>
                    </div>
                  </button>
                </form>
              </div>
            </article>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </main>

    <?php @include('partials/footer.php'); ?>

  </div>
</div>

<!-- Linking CSS -->
<link rel="stylesheet" href="<?= asset('build/assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= asset('build/assets/css/style.min.css') ?>">
<link rel="stylesheet" href="<?= asset('build/assets/css/style.min.css.map') ?>">

<!-- Chart library -->
<script src="<?= asset('plugins/chart.min.js') ?>"></script>
<!-- Icons library -->
<script src="<?= asset('plugins/feather.min.js') ?>"></script>
<!-- Custom scripts -->
<script src="<?= asset('js/script.js') ?>"></script>

</body>
</html>
