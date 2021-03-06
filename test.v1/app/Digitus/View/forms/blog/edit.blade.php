	{{ Form::open(array('method'=>'PUT','files'=>true,'action'=>array('admin.insides.update',$post->slug))) }}
	<div class="sidebar2" style="max-width:230px">
			Uitgelichte afbeelding:<br/>
		
		{{ Form::file('file') }}
			
	</div>
	<div class="blogroll col-8">

		

			<div class="col-12 panel panel-info post-{{$post->id}}">
				

				<div class="form-group">
					{{ Form::label('title', 'Post Title')}}
					{{ Form::text('title', $post->title, array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('slug', 'Post Slug')}}
					{{ Form::text('slug', $post->slug, array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('body', 'Post Body')}}
					{{ Form::textarea('body', $post->body, array('class'=>'form-control')) }}
				</div>
				<hr>
				
					<p class="col-6">Bestaande categories:<br />
						@foreach($categories as $categorie)
							<span class="label label-warning" style="line-height:2.25">{{$categorie->name}}</span>
						@endforeach
					</p>
					<p class="col-6">Gekoppelde categories:<br />
						@foreach($post->categories as $categorie)
								<span class="label label-success" style="line-height:2.25">{{ $categorie->name }}</span>
						@endforeach
					</p>
				<div class="form-group col-12">
					{{ Form::label('addcategorie', 'Voeg een categorie toe:') }}
					<input type="text" name="addcategorie" class="form-control">
					{{ Form::label('delcategorie', 'Delete een categorie:') }}
					<input type="text" name="delcategorie" class="form-control" >
				</div>
				<hr>
				<hr>
					<p class="col-6">Bestaande tags:
						@foreach($tags as $tag)
							<span class="label label-warning" style="line-height:2.25">{{$tag->name}}</span>
						@endforeach
					</p>
					<p class="col-6">Gekoppelde tags:<br />
						@foreach($post->tags as $tag)
							<span class="label label-success" style="line-height:2.25">{{ $tag->name }}</span>
						@endforeach
					</p>
				<div class="form-group col-12">
					{{ Form::label('addtag', 'Voeg een tag toe:') }}
					<input type="text" name="addtag" class="form-control">
					{{ Form::label('deltag', 'Delete een tag:') }}
					<input type="text" name="deltag" class="form-control">
				</div>
				<div class="form-group">
					{{ Form::submit('Save', array('class'=>'btn btn-success')) }}
				</div>

				{{ Form::close() }}

				<hr>

				<div class="blogbottom" style="background-color: #FAFAFA; padding:15px 15px 10px; margin-bottom:15px; border:1px solid #F1F1F1; border-bottom-left-radius:2px;border-bottom-right-radius:2px;">
					<div class="pull-left">
						<p>Tags: 
							@foreach($post->tags as $tag)
								<a href="{{ URL::to('tags/'.$tag->name) }}" title="{{$tag->name}}" alt="{{$tag->name}}">{{ $tag->name }}</a>,  
							@endforeach
						</p>
						<p>Geplaatst in: 
							@foreach($post->categories as $categorie)
								<a href="{{ URL::route('admin.categorie.show',$categorie->name) }}">{{ $categorie->name }}</a> 
							@endforeach
						</p>
					</div>

					<div class="pull-right">
						<p>Auteur: {{$post->getAuthorUsername() }}</p>
						<p>Datum: {{$post->getCreatedAt() }}</p>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
	</div>