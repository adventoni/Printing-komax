<label for="exampleFormControlTextarea1" class="grey-text">Select Buyer</label>
                <select class="custom-select" name="buyers">
                        <option selected disabled>--Select--</option>
                        @foreach($buyers as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name_buyer }}</option>
                        @endforeach
                </select> 
                @if($errors->has('buyer'))
                <p> {{ $errors->first('buyer')}} </p>
                @endif
