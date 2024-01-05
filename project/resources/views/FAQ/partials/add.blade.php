

<div class="FAQ_add">

   <div class="category-form">
       <form method="POST" action="{{ route('FAQ.store') }}" enctype="multipart/form-data">
           @csrf
           @method('POST')

           <label for="Category">Category</label>
           <input type="text" name="category" class="form-input">
           <input type="submit" value="ADD" class="btn btn-primary">
       </form>
   </div>

   <div class="FAQAnswers-form">
       <form method="POST" action="{{ route('FAQAnswers.store') }}" enctype="multipart/form-data">
           @csrf
           @method('POST')

           <div class="form-group">
               <label for="FAQ_id">Select Category</label>
               <select name="FAQ_id" id="FAQ_id" class="form-select">
                   <option value="">Select Category</option>
                   @foreach ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->category }}</option>
                   @endforeach
               </select>
               @error('FAQ_id') <small>{{ $message }}</small> @enderror
           </div>

           <div class="form-group">
               <input type="text" name="answer" placeholder="question/answer" class="form-input">
               <input type="submit" value="ADD a question/answer" class="btn btn-primary">
           </div>
       </form>
   </div>

</div>
