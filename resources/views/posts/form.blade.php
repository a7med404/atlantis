
            <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['class' => 'control-label']) !!} 
                        {!! Form::text('title', null, ['id' => 'title', 'class' => "form-control {{ $errors->has('title') ? ' is-invalid' : '' }}", 'value' => "{{ old('title') }}", 'required', 'autofocus']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            {!! Form::label('image', ' تحمل مرفقات', ['class' => 'control-label']) !!} <i class="fa fa-paperclip"></i>
                            {!! Form::file('image', null, ['id' => 'image', 'class' => "form-control {{ $errors->has('image') ? ' is-invalid' : '' }}", 'value' => "{{ old('image') }}", 'required', 'autofocus']) !!}
                        </div>
                        <p class="help-block">Max. 4MB</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                        {!! Form::label('content', 'Content', ['class' => 'control-label']) !!} 
                        {!! Form::textarea('content', null, ['id' => 'content', 'class' => "form-control {{ $errors->has('content') ? ' is-invalid' : '' }}", 'value' => "{{ old('content') }}", 'required', 'autofocus']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    @if(isset($post))
                        {!! Form::submit('Update', ['class' => "btn btn-primary btn-md"]) !!}
                    @else
                        {!! Form::submit('Create', ['class' => "btn btn-primary btn-md"]) !!}
                    @endif
                </div>
            </div>

 
