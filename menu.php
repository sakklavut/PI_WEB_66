<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand box_logo" href="#">
          <img class="img-fluid" src="icon/logo.svg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
      <li class="nav-item dropdown has-megamenu">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="โครงสร้างสถาบัน"> โครงสร้างสถาบัน ฯ  </a>
				<div class="dropdown-menu megamenu" role="menu">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">                  
                      <div class="dropdown">
                        <h6 class="h_mune_lv2">สำนักงานอธิการบดี</h6>
                          <div class="dropdown-content w_menu">
                            <a href="#">สำนักงานสภาสถาบันพระบรมราชชนก</a>
                            <a href="#">กองกลาง</a>
                            <a href="#">กองบริหารการคลังและพัสดุ </a>
                            <a href="#">กองทรัพยากรบุคคล</a>
                            <a href="#">กองยุทธศาสตร์และวิเทศสัมพันธ์</a>
                            <a href="#">กองยุทธศาสตร์และวิเทศสัมพันธ์</a>
                            <a href="#">กองยุทธศาสตร์และวิเทศสัมพันธ์</a>
                            <a href="#">กองยุทธศาสตร์และวิเทศสัมพันธ์</a>
                            <a href="#">กองเทคโนโลยีดิจิทัล</a>
                            <a href="#">กองกิจการนักศึกษา</a>
                          </div>
                      </div>    
                    </div>
                    <div class="col-xl-3">
                      <div class="dropdown">
                          <h6>สำนักวิชาการ</h6>
                            <div class="dropdown-content w_menu">
                              <a href="#">สำนักงานสภาสถาบันพระบรมราชชนก</a>
                              <a href="#">กองกลาง</a>
                              <a href="#">กองบริหารการคลังและพัสดุ </a>
                            </div>
                        </div>    
                    </div>
                    <div class="col-xl-3">
                      <div class="dropdown">
                        <h6>คณะพยาบาลศาสตร์</h6>
                          <div class="dropdown-content w_menu">
                            <a href="#">สำนักงานสภาสถาบันพระบรมราชชนก</a>
                            <a href="#">กองกลาง</a>
                            <a href="#">กองบริหารการคลังและพัสดุ </a>
                          </div>
                      </div>    
                    </div>
                    <div class="col-xl-3">
                      <div class="dropdown">
                        <h6>คณะสาธารณสุขศาสตร์และสหเวชศาสตร์</h6>
                          <div class="dropdown-content w_menu">
                            <a href="#">สำนักงานสภาสถาบันพระบรมราชชนก</a>
                            <a href="#">กองกลาง</a>
                            <a href="#">กองบริหารการคลังและพัสดุ </a>
                          </div>
                      </div>    
                    </div>
                </div>
            </div>
				</div> <!-- dropdown-mega-menu.// -->
			</li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="เกี่ยวกับ">เกี่ยวกับ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="การศึกษา">การศึกษา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="นักศึกษา">นักศึกษา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="ข่าวสารและกิจกรรม">ข่าวสารและกิจกรรม</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="ติดต่อเรา">ติดต่อเรา</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





<script>
  document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end
</script>