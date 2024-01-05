
<table class="faq-table" border="1">
    <thead>
    
        <tr>
            <th>Category</th>
            <th>Questions</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="category-cell">{{ $category->category }}</td>
                <td class="questions-cell">
                    <ul class="questions-list">
                        @foreach ($category->FAQ_answers as $answer)
                            <li>{{ $answer->answer }}</li>
                        @endforeach
                    </ul>
                </td>
                <td class="edit-cell">
                    <form method="" action="{{ route('editFAQ', ['FAQ' => $category->id]) }}" class="admin-form">
                      @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>

                <td class="delete-cell">
                    <form method="post" action="{{ route('FAQ.destroy', ['FAQ' => $category->id]) }}" class="admin-form">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>