<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('users.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('users.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('users.destroy',$record->id)}}"
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
			<th>Name</th>
			<td>{{$record->name}}</td>
		</tr>
		<tr>
			<th>Photo</th>
			<td>{{$record->photo}}</td>
		</tr>
		<tr>
			<th>Role</th>
			<td>{{$record->role}}</td>
		</tr>
		<tr>
			<th>Age</th>
			<td>{{$record->age}}</td>
		</tr>
		<tr>
			<th>Phone Number</th>
			<td>{{$record->phone_number}}</td>
		</tr>
		<tr>
			<th>Address</th>
			<td>{{$record->address}}</td>
		</tr>
		<tr>
			<th>City</th>
			<td>{{$record->city}}</td>
		</tr>
		<tr>
			<th>State</th>
			<td>{{$record->state}}</td>
		</tr>
		<tr>
			<th>Country</th>
			<td>{{$record->country}}</td>
		</tr>
		<tr>
			<th>Postal Code</th>
			<td>{{$record->postal_code}}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{$record->email}}</td>
		</tr>
		<tr>
			<th>Email Verified At</th>
			<td>{{$record->email_verified_at}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
