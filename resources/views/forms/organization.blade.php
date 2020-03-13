<form action="{{isset($route)?$route:route('organizations.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" id="location" value="{{old('location',$model->location)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('location'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('location') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category" value="{{old('category',$model->category)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('category'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('category') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" id="phone_number" value="{{old('phone_number',$model->phone_number)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('phone_number'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('phone_number') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address" value="{{old('address',$model->address)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('address'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('address') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="city" value="{{old('city',$model->city)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('city'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('city') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="state" value="{{old('state',$model->state)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('state'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('state') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="country" value="{{old('country',$model->country)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('country'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('country') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="postal_code">Postal Code</label>
        <input type="text" class="form-control {{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" id="postal_code" value="{{old('postal_code',$model->postal_code)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('postal_code'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('postal_code') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>