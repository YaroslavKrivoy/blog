<li class="{{ Request::is('blogCategories*') ? 'active' : '' }}">
    <a href="{{ route('blogCategories.index') }}"><i class="fa fa-edit"></i><span>Blog Categories</span></a>
</li>

<li class="{{ Request::is('blogTags*') ? 'active' : '' }}">
    <a href="{{ route('blogTags.index') }}"><i class="fa fa-edit"></i><span>Blog Tags</span></a>
</li>

<li class="{{ Request::is('blogComments*') ? 'active' : '' }}">
    <a href="{{ route('blogComments.index') }}"><i class="fa fa-edit"></i><span>Blog Comments</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('blogArticles*') ? 'active' : '' }}">
    <a href="{{ route('blogArticles.index') }}"><i class="fa fa-edit"></i><span>Blog Articles</span></a>
</li>

