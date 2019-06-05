<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
          </ol>
          <h6 class="slim-pagetitle"><?php echo $title; ?></h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Select Box</label>
          <p class="mg-b-20 mg-sm-b-40">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

          <div class="row">
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->