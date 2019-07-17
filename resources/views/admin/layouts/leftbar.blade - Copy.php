<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <ul class="sidebar-menu" data-widget="tree">
      
        <li class="{{  request()->path() == 'admin/dashboard' ? 'active' : '' }}">
          <a href="{{url('/admin/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li class="{{  request()->path() == 'admin/medias' ? 'active' : '' }}">
          <a href="{{url('/admin/medias')}}">
            <i class="fa fa-camera"></i> <span>Media</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li class="treeview @if(in_array(request()->path(),array('admin/posts',request()->is('admin/posts/*')))) active  menu-open @endif">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{  request()->path() == 'admin/posts' ? 'active' : '' }}"><a href="{{url('admin/posts')}}"><i class="fa fa-circle-o"></i> Posts</a></li>
            <li class="{{  request()->path() == 'admin/posts/create' ? 'active' : '' }}"><a href="{{url('admin/posts/create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li class="{{  request()->path() == 'admin/posts/category' ? 'active' : '' }}"><a href="{{url('admin/posts/category')}}"><i class="fa fa-circle-o"></i> Category</a></li>
          </ul>
        </li>

        <li class="treeview @if(in_array(request()->path(),array('admin/pages',request()->is('admin/pages/*')))) active  menu-open @endif">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{  request()->path() == 'admin/pages' ? 'active' : '' }}"><a href="{{url('admin/pages')}}"><i class="fa fa-circle-o"></i> Pages</a></li>
            <li class="{{  request()->path() == 'admin/pages/create' ? 'active' : '' }}"><a href="{{url('admin/pages/create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li class="treeview @if(in_array(request()->path(),array('admin/products',request()->is('admin/products/*')))) active  menu-open @endif">
          <a href="#">
            <i class="fa fa-product-hunt"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{  request()->path() == 'admin/products' ? 'active' : '' }}"><a href="{{url('admin/products')}}"><i class="fa fa-circle-o"></i> Products</a></li>
            <li class="{{  request()->path() == 'admin/products/create' ? 'active' : '' }}"><a href="{{url('admin/products/create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li class=" @if(in_array(request()->path(),array('admin/products/category',request()->is('admin/products/category/*')))) active  @endif"><a href="{{url('admin/products/category')}}"><i class="fa fa-circle-o"></i> Product Category</a></li>
            <li class="{{  request()->path() == 'admin/products/attributes' ? 'active' : '' }}"><a href="{{url('admin/products/attributes')}}"><i class="fa fa-circle-o"></i> Attributes</a></li>
          </ul>
        </li>
        <li class="treeview @if(in_array(request()->path(),array('admin/menus',request()->is('admin/menus/*')))) active  menu-open @endif">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{  request()->path() == 'admin/menus' ? 'active' : '' }}"><a href="{{url('admin/menus')}}"><i class="fa fa-circle-o"></i> Menus</a></li>
          </ul>
        </li>
        <li class="treeview @if(in_array(request()->path(),array('admin/settings',request()->is('admin/settings/*')))) active  menu-open @endif">
          <a href="#">
            <i class="fa fa-gavel"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{  request()->path() == 'admin/settings/general' ? 'active' : '' }}"><a href="{{url('admin/settings/general')}}"><i class="fa fa-circle-o"></i> General Setting</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>