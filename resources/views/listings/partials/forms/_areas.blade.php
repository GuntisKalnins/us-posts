<div class="form-group{{ $errors->has('area_id') ? ' text-danger' : '' }}">
    <label for="area" class="control-label"><strong>County:</strong></label>
    <select name="area_id" id="area" class="form-control e1" searchable="Search here..">

        @foreach ($areas as $country)            
            @foreach ($country->children as $state)
                <optgroup label="{{ $state->name }}">

                    @foreach ($state->children as $city)
                        @if (
                            isset($listing) && $listing->area->id == $city->id ||
                            !isset($listing) && $area->id == $city->id && !old('area_id') ||
                            old('area_id') == $city->id
                        )
                            <option value="{{ $city->id }}" selected="selected">{{ $city->name }}</option>
                        @else
                            <option value="{{ $city->id }}">{{ $city->name }}</option>

                        @endif
                    @endforeach

                </optgroup>
            @endforeach
        @endforeach

    </select>
    @if ($errors->has('area_id'))
        <span class="help-block">
            {{ $errors->first('area_id') }}
        </span>
    @endif
</div>