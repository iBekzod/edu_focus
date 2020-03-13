<form action="{{isset($route)?$route:route('subjects.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
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
        <label for="ISBN">ISBN</label>
        <input type="text" class="form-control {{ $errors->has('ISBN') ? ' is-invalid' : '' }}" name="ISBN" id="ISBN" value="{{old('ISBN',$model->ISBN)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('ISBN'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('ISBN') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>