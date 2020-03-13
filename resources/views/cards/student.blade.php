<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('students.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('students.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('students.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Subject Interest</th>
			<td>{{$record->subject_interest}}</td>
		</tr>
		<tr>
			<th>Score</th>
			<td>{{$record->score}}</td>
		</tr>
		<tr>
			<th>Status Id</th>
			<td>{{$record->status_id}}</td>
		</tr>
		<tr>
			<th>Progress Id</th>
			<td>{{$record->progress_id}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
