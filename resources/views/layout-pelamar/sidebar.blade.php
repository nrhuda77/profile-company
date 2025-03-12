 <!--**********************************
              Sidebar start
          ***********************************-->
          <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first"></li>
                

                    <li class="">
                        <a class="" href="/dashboard" aria-expanded="false"><i class="fas fa-chart-pie"></i>
                          <span class="nav-text">Dasboard</span>
                        </a>
                      </li>
            
                      <li class="">
                        <a class="" href="/lamaran-pekerjaan" aria-expanded="false"><i class="fas fa-address-card"></i>
                          <span class="nav-text">Form Lamaran</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="" href="/logout" aria-expanded="false"><i class="fas fa-arrow-right" onclick="event.preventDefault();document.getElementById('logout-form').submit();"></i>
                          <span class="nav-text">Log Out</span>
                        </a>
                        <form id="logout-form" action="/logout" method="POST" class="dropdown-item">
                          @csrf
                      </form>
                      </li>
  
                   
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->