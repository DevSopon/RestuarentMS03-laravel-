<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{Request::is('admin/dashboard*') ? 'active': ''}} ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('admin/slider*') ? 'active': ''}} ">
                <a class="nav-link" href="{{route('slider.index')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Slider</p>
                </a>
            </li>
            <li class="{{Request::is('admin/category*') ? 'active': ''}} ">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Category</p>
                </a>
            </li>

            <li class="{{Request::is('admin/item*') ? 'active': ''}} ">
                <a class="nav-link" href="{{route('item.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Item</p>
                </a>
            </li>
            <li class="{{Request::is('admin/reserve*') ? 'active': ''}} ">
                <a class="nav-link" href="{{route('reservation.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>All Reservation</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>

        </ul>
    </div>
</div>
