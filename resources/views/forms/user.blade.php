<form action="{{isset($route)?$route:route('users.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{old('name',$model->name)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('name'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="text" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" id="photo" value="{{old('photo',$model->photo)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('photo'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('photo') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" class="form-control {{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" id="role" value="{{old('role',$model->role)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('role'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('role') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control {{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" id="age" value="{{old('age',$model->age)}}" placeholder="" required="required" >
          @if($errors->has('age'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('age') }}</strong>
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

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{old('email',$model->email)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('email'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="email_verified_at">Email Verified At</label>
    <div class="input-group">
        <input type="datetime" class="form-control {{ $errors->has('email_verified_at') ? ' is-invalid' : '' }}" name="email_verified_at" id="email_verified_at"
               value="{{old('email_verified_at',$model->email_verified_at)}}"
               placeholder="" >
        <div class="input-group-addon">
            <label for="email_verified_at" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('email_verified_at'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('email_verified_at') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>