<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?= base_url(); ?>profile/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?=base_url();?>">
      <i class="bi bi-house"></i>
      <span>Home</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url(); ?>profile/profile">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#security-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Security</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="security-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= base_url(); ?>profile/changepassword">
          <i class="bi bi-circle"></i><span>Password</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Transaction Password</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-person-badge-fill"></i>
      <span>KYC</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-person"></i>
      <span>New User Registration</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-credit-card"></i>
      <span>Transfer</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#teams-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>Team</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="teams-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Directs</span>
        </a>
      </li>
      <li>
        <a href="<?= base_url(); ?>profile/team">
          <i class="bi bi-circle"></i><span>Genealogy Tree - binary</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-person"></i>
      <span>Reports</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-envelope"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Email Form</span>
        </a>
      </li>
      <li>
        <a href="components-accordion.html">
          <i class="bi bi-circle"></i><span>WhatsApp Button</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->



  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-box-arrow-left"></i>
      <span>Logout</span>
    </a>
  </li>

</ul>

</aside><!-- End Sidebar-->