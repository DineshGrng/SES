<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('student.index') }}" class="nav-link"><i data-feather="users"></i><span>Student</span></a>
          </li>
          <li class="dropdown ">
            <a href="{{ route('course.index') }}" class="nav-link"><i data-feather="book-open"></i><span>Course</span></a>
          </li>
      </ul>
    </aside>
  </div>
