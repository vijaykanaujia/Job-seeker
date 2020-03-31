<!-- Masthead -->
<header class="masthead text-white text-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-11 mx-auto">
        <h1 class="mb-5">Let us help you find an National or International Internship</h1>
      </div>
      <div class="col-md-12 col-lg-10 col-xl-9 mx-auto">
        <form target="_blank" class="header-form" action="{BASE_URL}/app/search.php#search" method="post" accept-charset="UTF-8" id="job_search_form">
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0 flexme">
              <input type="text" name="keyword" value="{(isset($keyword)) ? $keyword : ''}" class="form-control form-control-lg" placeholder="Search for a job description......">
      <input type="text" name="location" value="{(isset($location)) ? $location : ''}" class="form-control form-control-lg" placeholder="Country...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>