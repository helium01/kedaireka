<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">IPAL</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{asset('admin')}}/#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">monitoring sensor ipal</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/buttons.html">sensor ph</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/dropdowns.html">sensor suhu air</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/typography.html">sensor tts</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/typography.html">sensor DO</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Cuaca</li>
          <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="{{asset('admin')}}/#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">monitoring sensor Cuaca</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/buttons.html">sensor kelembaban dan suhu DHT22</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/dropdowns.html">sensor Barometric Pressure (BME280) tekanan udara</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/typography.html">sensor curah hujan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/ui-features/typography.html">sensor arah mata angin</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item nav-category">kualitas udara</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{asset('admin')}}/#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">monitoring kualitas udara</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/samples/login.html"> Sensor Gas </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/samples/login.html"> sensor GP2Y1010AU0F Partikular </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/samples/login.html"> sensor mq-131 ozon </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/samples/login.html"> sensor mq-7 carbon monoxide </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin')}}/pages/samples/login.html"> sensor mq-136 Sulfur </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">input data</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">tentang kami</span>
            </a>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">hubungi kami</span>
            </a>
          </li>
         
          
        </ul>
      </nav>