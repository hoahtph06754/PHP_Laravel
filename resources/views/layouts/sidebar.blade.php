  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::check()?Auth::user()->name:'null' }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('users')?'active':'' }}"><a href="{{ route('users.index') }}"><i class="fa fa-link"></i> <span>Users manage</span></a></li>

        <li class="{{ Request::is('categories')?'active':'' }}"><a href="{{ route('categories.index') }}"><i class="fa fa-link"></i> <span>Categories manage</span></a></li>
        <li class="{{ Request::is('posts')?'active':'' }}"><a href="{{ route('posts.index') }}"><i class="fa fa-link"></i> <span>Posts manage</span></a></li>
        <li class="{{ Request::is('comments')?'active':'' }}"><a href="{{ route('comments.index') }}"><i class="fa fa-link"></i> <span>Comments manage</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>