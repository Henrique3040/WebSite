<div class="edit-FAQ-container">

    <form method="post" action="{{ route('FAQ.update', ['FAQ' => $categories]) }}" enctype="multipart/form-data" class="edit-FAQ-form">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" name="category" id="category" placeholder="category" value="{{ $categories->category }}" class="form-input">
        </div>

        <div class="form-group-submit">
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>

    @if ($categories->FAQ_answers)
        @foreach($categories->FAQ_answers as $question)
            <form action="{{ route('FAQAnswers.update', ['answer' => $question->id]) }}" method="post" enctype="multipart/form-data" class="edit-FAQAnswers-form">
                @csrf
                @method('put')
                <div class="form-group">
                    <input type="text" name="answer" placeholder="answer/question" value="{{ $question->answer }}" class="form-input">
                </div>

                <div class="form-group-submit">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>

            <form action="{{ route('FAQAnswers.destroy', ['id' => $question->id]) }}" method="post" enctype="multipart/form-data" class="delete-FAQAnswers-form">
                @csrf
                @method('delete')
                <div class="form-group-submit">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </div>
            </form>
        @endforeach
    @endif

</div>