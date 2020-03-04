<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#maindata" class="nav-link active" data-toggle="tab" role="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input name="title" value="{{ $category->title }}"
                                    type="text"
                                    id="title"
                                    class="form-control"
                                    minlength="3"
                                    >
                        </div>
                        
                        <div class="form-group">
                            <label for="slug">Идентификатор</label>
                            <input name="slug" value="{{ $category->slug }}"
                                    type="text"
                                    id="slug"
                                    class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Родитель</label>
                            <select name="parent_id"
                                    id="parent_id"
                                    placeholder="Выберете категорию"
                                    required>
                                @foreach($categoriesList as $categoryOption)
                                    <option value="{{ $categoryOption->id }}"
                                        @if($categoryOption->id == $category->parent_id) selected @endif>
                                        {{ $categoryOption->select_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description"
                                    id="description"
                                    class="form-control"
                                    rows="3">
                                {{ old('description', $category->description) }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>