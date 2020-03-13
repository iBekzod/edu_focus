<form action="{{isset($route)?$route:route('jobs.store')}}" method="POST" >
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
        <label for="category">Category</label>
        <input type="text" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category" value="{{old('category',$model->category)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('category'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('category') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="text" class="form-control {{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" id="picture" value="{{old('picture',$model->picture)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('picture'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('picture') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" value="{{old('description',$model->description)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('description'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('description') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" class="form-control {{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary" id="salary" value="{{old('salary',$model->salary)}}" placeholder="" required="required" >
          @if($errors->has('salary'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('salary') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>