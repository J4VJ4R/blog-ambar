<div class="container">
    <div class="row align-content-center">
        <div class="col-6">
            <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            <form action="{{route("menu.store")}}" method="post" id="form-general">
                @csrf
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email"  name="email"
                           value="{{old('email', $data->email ?? '')}}">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd"  name="password"
                           value="{{old("password", $data->password ?? '')}}">
                </div>
                <div class="form-group form-check">
                    <label class="control-label" for="icon">
                        <input class="form-control" id="icon" type="text" name="icon"
                               value="{{old("icon", $data->icon ?? '')}}"> icon
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
