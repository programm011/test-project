<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <x-nav-item :route="route('users.index')" icon="far fa-user" :text="__('sidebar.users')" />
                <x-nav-item :route="route('roles.index')" icon="fa fa-exclamation-circle" :text="__('sidebar.roles')" />
                <x-nav-item :route="route('permissions.index')" icon="fa fa-exclamation" :text="__('sidebar.permissions')" />
                <x-nav-item :route="route('courses.index')" icon="fa fa-graduation-cap" :text="__('sidebar.courses')" />
                <x-nav-item :route="route('lessons.index')" icon="fa fa-chalkboard-teacher" :text="__('sidebar.lessons')" />
                <x-nav-item :route="route('questions.index')" icon="fa fa-question" :text="__('sidebar.questions')" />
                <x-nav-item :route="route('promo-codes.index')" icon="fa fa-tag" :text="__('sidebar.promo-codes')" />
                <x-nav-item :route="route('settings.edit',1)" icon="fa fa-cog" :text="__('sidebar.settings')" />
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
