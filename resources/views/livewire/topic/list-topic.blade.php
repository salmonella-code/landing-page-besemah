<div>
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Topik</h4>
        <ul class="list cat-list">
            @foreach ($topics as $topic)
                <li>
                    <a href="{{ route('topic.single', $topic) }}" class="d-flex">
                        <p>{{ $topic->name }}</p>
                        <p>({{ $topic->articles_count }})</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </aside>
</div>
