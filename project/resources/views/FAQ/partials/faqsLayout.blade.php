<div class="faq-display">


    <div class="wrapper">
      @if(! $categories->isEmpty())
  
       @foreach ($categories as $category)
 

    
        <div class="accordion">
            <div class="item">
                
                

                <input type="radio" id="{{ $category->id }}" name="item" class="inputFAQ">
                <label for="{{ $category->id }}" class="title">{{ $category->category }}</label>

                @if ($category->FAQ_answers)
                @foreach ($category->FAQ_answers as $answer)
                <div class="contentFAQ">
                    {{ $answer->answer }}
                </div>
                @endforeach
                @endif

            </div>
        </div>

        @endforeach
        
        @else
        <p>Admins have not yet added the questions.</p>

        @endif
   
        
    </div>
    
</div>