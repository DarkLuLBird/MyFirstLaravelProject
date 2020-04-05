<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if($article->is_published)
                    Опубликовано
                @else
                    Черновик
                @endif
            </div>
            <div class="card-body">
                <div class="card-title"></div>
                <div class="card-subtitle mb-2 text-muted"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#maindata" class="nav-link active" data-toggle="tab" role="tab">Основные данные</a>
                    </li>
                    <li class="nav-item">
                        <a href="#adddata" class="nav-link" data-toggle="tab" role="tab">Доп. данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input name="title" value="{{ $article->title }}"
                                id="title"
                                type="text"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="content-raw">Статья</label>
                            <textarea name="content_raw"
                                id="content_raw"
                                class="form-control"
                                rows="28">{{ old("content_raw", $article->content_raw) }}</textarea>
                        </div>
                    </div>

                    <div class="tab-pane active" id="adddata" role="tabpanel">
                        <div class="form-group">
                            <label for="category_id">Категория</label>
                            <select name="category_id" value="{{ $article->title }}"
                                id="category_id"
                                class="form-control"
                                placeholder="Выберите категорию">
                                @foreach($categoryList as $categoryOption)
                                    <option value="{{ $categoryOption->id }}"
                                            @if($categoryOption->id == $article->category_id) selected @endif>
                                        {{ $categoryOption->select_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="slug" value="{{ $article->slug }}">Идентификатор</label>
                            <input name="slug"
                                id="slug"
                                type="text"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="excerpt">Статья</label>
                            <textarea name="excerpt"
                                id="excerpt"
                                class="form-control"
                                rows="3">{{ old("excerpt", $article->excerpt) }}</textarea>
                        </div>

                        <div class="form-check">
                            <input name="is_published"
                                type="hidden"
                                value="0">
                            <input name="is_published"
                                type="checkbox"
                                class="form-check-input"
                                value="{{ $article->is_published }}"
                                @if($article->is_published)
                                    checked="checked"
                                @endif
                            >
                            <label for="is_published" class="foem-check-label">Опубликовано</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>