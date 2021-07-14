  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">YouTruth Admin</a>
    </header>
    <ul class="nav">
      <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
        <a href="/admin/dashboard/">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
        </a>
      </li>
      <li class="{{ (request()->is('admin/add-post')) ? 'active' : '' }}">
        <a href="/admin/add-post/">
          <i class="zmdi zmdi-link"></i> Add Post
        </a>
      </li>
      <li class="{{ (request()->is('admin/edit-post')) ? 'active' : '' }} {{ (request()->is('admin/modify-post/*')) ? 'active' : '' }}">
        <a href="/admin/edit-post/">
          <i class="zmdi zmdi-widgets"></i> Edit Post
        </a>
      </li>
      <li class="{{ (request()->is('admin/delete-post')) ? 'active' : '' }}">
        <a href="/admin/delete-post/">
          <i class="zmdi zmdi-calendar"></i> Delete Post
        </a>
      </li>
      <li>
        <a href="/logout">
          <i class="zmdi zmdi-info-outline"></i> Logout
        </a>
      </li>
    </ul>
  </div>