<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="{{ route('admin.index') }}">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>
    <li><a href="{{ route('employee.index') }}"><i class="fa fa-users"></i> <span>Сотрудники</span></a></li>
    <li><a href="{{ route('department.index') }}"><i class="fa fa-list-ul"></i> <span>Подразделения</span></a></li>
    <li><a href="{{ route('position.index') }}"><i class="fa fa-tags"></i> <span>Должности</span></a></li>
    <li><a href="{{ route('tag.index') }}"><i class="fa fa-tags"></i> <span>Теги</span></a></li>
    <li>
        <a href="#">
            <i class="fa fa-commenting"></i> <span>Комментарии</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">5</small>
            </span>
        </a>
    </li>
    <li><a href="#"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
    <li><a href="#"><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>

</ul>
</section>
<!-- /.sidebar -->
{{--fa-sticky-note-o--}}
