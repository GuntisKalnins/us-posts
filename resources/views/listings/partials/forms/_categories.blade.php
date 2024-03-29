<div class="form-group{{ $errors->has('category_id') ? ' text-danger' : '' }}">
    <label for="category" class="control-label"><strong>Category:</strong></label>
    <select name="category_id" id="category" class="form-control e1" {{ isset($listing) && $listing->live() ? ' disabled="disabled"' : '' }}>

        @foreach ($categories as $category)
            <optgroup label="{{ $category->name }}">

                @foreach ($category->children as $child)
                    @if (isset($listing) && $listing->category_id == $child->id || old('category_id') === $child->id)
                        <option value="{{ $child->id }}" selected="selected">{{ $child->name }} <!-- (${{ number_format($child->price, 2) }})--></option> 
                    @else
                        <option value="{{ $child->id }}">{{ $child->name }} <!-- (${{ number_format($child->price, 2) }})--></option> 
                    @endif

                @endforeach
                    
            </optgroup>
        @endforeach
        
    </select>

    @if ($errors->has('category_id'))
        <span class="help-block">
            {{ $errors->first('category_id') }}
        </span>
    @endif

</div>