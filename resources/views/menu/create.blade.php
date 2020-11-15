<div class="container">
    <div class="row align-content-center">
        <div class="col-6">
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
            @endforeach
            <form action="{{route("menu.store")}}" id="formGeneral" class="form-horizontal" method="POST">
                @csrf
                <div class="form-group">
                    <label for="icon" class="col-lg-3 control-label">Icon</label>
                    <div class="col-lg-8">
                        <input type="text" name="icon" id="icon" class="form-control"
                               value="{{old('icon', $data->icon ?? '')}}">
                    </div>
                </div>
                <div>
                    <button class="btn " type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
