<div class="col-md-4 content-right">
    <div class="categories">
        <h3>CATEGORIES</h3>
        
        
        
        <ul>
        
            @foreach($categories as $category)
                <li><a href="#">{{ $category->title }}</a></li>
            @endforeach
        </ul>

    </div>


    <div class="recent">
        <h3>RECENT POSTS</h3>
        
        @php
            use App\Article;

            $articles = Article::latest()->take(4)->get();
        @endphp
        
        <ul>
            @foreach($articles as $article)
                <li><a href="#">{{ $article->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="comments">
        <h3>RECENT COMMENTS</h3>
        <ul>

            <li><a href="#">Комменты</a> on <a href="#">Статейки</a></li>

        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="archives">
        <h3>ARCHIVES</h3>
        <ul>
        <li><a href="#">October 2013</a></li>
        <li><a href="#">September 2013</a></li>
        <li><a href="#">August 2013</a></li>
        <li><a href="#">July 2013</a></li>
    </ul>
    </div>
    <div class="clearfix"></div>

    <div class="clearfix"></div>
</div>