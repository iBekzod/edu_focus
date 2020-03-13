<form action="{{isset($route)?$route:route('tasks.store')}}" method="POST" >
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
        <label for="job_specification">Job Specification</label>
        <input type="text" class="form-control {{ $errors->has('job_specification') ? ' is-invalid' : '' }}" name="job_specification" id="job_specification" value="{{old('job_specification',$model->job_specification)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('job_specification'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('job_specification') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="type" value="{{old('type',$model->type)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('type'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('type') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>