          <div class="form-group">
              {!! Form::label('name', 'Team Name : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('name', $team->name ?? '' , ['class' => 'form-control','placeholder'=>'Enter team name'])
              !!}
          </div>

          <div class="form-group">
              {!! Form::label('contact', 'Team Contact : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('contact', $team->contact ?? '' , ['class' => 'form-control','placeholder'=>'Enter team contact']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('address', 'Team Address : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('address', $team->address ?? '' , ['class' => 'form-control','placeholder'=>'Enter team address']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('email', 'Team Email : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('email', $team->email ?? '' , ['class' => 'form-control','placeholder'=>'Enter team email']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('facebook', 'Team Facebook : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('facebook', $team->facebook ?? '' , ['class' => 'form-control','placeholder'=>'Enter team facebook']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('twitter', 'Team Twitter : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('twitter', $team->twitter ?? '' , ['class' => 'form-control','placeholder'=>'Enter team twitter']) !!}
          </div>

          {!! Form::label('image', 'Service Image :', ['class' => 'font-weight-bold']) !!}
          @if(isset($team->image))
          <div class="form-group" id="teamImageDiv">
              <img src="{{ asset(imagePath($team->image, 'teams')) }}" class="img img-rounded" alt=""
                  style="width: 400px;height:220px">
          </div>
          @endif
          <div class="form-group">
              <img id="teamImageShow" class="img img-rounded" src="#" alt="" style="" />
          </div>

          <div class="custom-file mb-2">
              <input type="file" name="image" class="custom-file-input" id="teamImage">
              <label class="custom-file-label" for="teamImage">Select Profile Image</label>
          </div>

          {!! Form::label('SEO', 'For Better SEO ', ['class' => 'font-weight-bold']) !!}

          <div class="form-group">
              {!! Form::label('meta_title', 'Blog Meta title : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('meta_title', $blog->meta_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta title']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('meta_tags', 'Blog Meta tags : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('meta_tags', $blog->meta_tags ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta tags']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('meta_description', 'Blog Meta description : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('meta_description', $blog->meta_description ?? '' , ['class' =>
              'form-control','placeholder'=>'Enter blog meta description']) !!}
          </div>


          <div class="form-group">
              <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
              <a href="{{ route('backend.teams') }}" class="btn btn-primary float-left">Cancel</a>
          </div>
