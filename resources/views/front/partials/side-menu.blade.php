<nav id="menu">
    <ul>
        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i>
                Homepage</a></li>
        <li>
            <span class="opener"> <i class="fas fa-clipboard-list"> </i>
                Categorii</span>
            <ul>

                @foreach ($menu_categories as $category)
                    <li>
                        <a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
                    </li>
                @endforeach

            </ul>
        </li>
        <li><a href="{{ route('articles', ['all_articles' => 'all_articles']) }}">Articole</a></li>
        <li><a href="{{ route('category.info') }}">Site info</a></li>

        <li><a href="{{ route('dashboard') }}">External Link</a></li>
    </ul>
</nav>
