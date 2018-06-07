<label for="exampleFormControlTextarea1" class="grey-text">Select Buyer</label>
                <select class="custom-select" name="id_country">
                    <option selected disabled>--Select--</option>
                    @foreach($countries as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->country_name }}</option>
                        @endforeach
                      </select>
                      @if($errors->has('id_country'))
                      <p> {{ $errors->first('id_country')}} </p>
                      @endif