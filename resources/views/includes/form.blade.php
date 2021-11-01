@csrf
<div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{old('name') ?? $client->name}}" class="@error('name') is-invalid @enderror" placeholder="Enter Name">
            @error('name')
            <div class="alert alert-danger">
                {{$errors->first('name')}}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
        <input type="email" name="email" value="{{old('email') ?? $client->email}}" class="form-control" placeholder="Email Address" class="@error('email') is-invalid @enderror" placeholder="Enter email Address">
        @error('email')
            <div class="alert alert-danger">
                {{$errors->first('email')}}
            </div>
        @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <select name="status" class="form-control" class="@error('status') is-invalid @enderror">
                @foreach ($client->getStatusOptions() as $key => $value)
                <option value="{{$key}}" {{$client->status == $value ? 'selected' : ''}}>{{$value}}</option>
                @endforeach
            </select>
            @error('status')
                <div class="alert alert-danger">
                    {{$errors->first('status')}}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <select name="entreprise_id" class="form-control" class="@error('entreprise_id') is-invalid @enderror">
                @foreach ($entreprises as $entreprise)
                <option value="{{$entreprise->id}}" {{$client->entreprise_id == $entreprise->id ? 'selected' : ''}}>{{$entreprise->name}}</option>
                @endforeach
            </select>
            @error('entreprise_id')
                <div class="alert alert-danger">
                    {{$errors->first('entreprise_id')}}
                </div>
            @enderror
        </div>
    </div>
</div>
