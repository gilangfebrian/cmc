                {!! Form::open(['url' => '/login']) !!}

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">

                            @if(Session::has('flash_error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('flash_error') }}
                                </div>
                            @endif
                                
                                @if($errors->has())
                                <span class="label label-danger">{!! $errors->first('username')!!}</span>
                                <p></p>
                                    @endif
                            
                                <div class="form-group">
                                    {{ Form::text(
                                        "username",
                                        Input::old("username"),
                                        array(
                                            "placeholder" => "Username",
                                            "class" => "form-control"
                                        ))
                                    }}
                                </div>

                            @if($errors->has())
                            <span class="label label-danger">{!! $errors->first('password')!!}</span>
                            <p></p>
                                @endif
                            
                                <div class="form-group">
                                    {{ Form::password(
                                        "password",
                                        array(
                                            "placeholder" => "Password",
                                            "class" => "form-control"
                                        ))
                                    }}
                                </div>
                        </div>
                        <div class="panel-footer">
                            {{ Form::submit("Login", array("class" => 'btn btn-primary')) }}
                        </div>
                    </div>
                {{ Form::close() }}