<?php use Illuminate\Support\Facades\Auth;?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">


                <div class="panel-body">
                    <!-- New Task Form -->


					<? if (Auth::check()) {?>

                    <form action="{{ url('post')}}" method="POST" class="form-horizontal" enctype=multipart/form-data>
                        {{ csrf_field() }}
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="post-name" class="col-sm-6 control-label">Твоё объявление/пост</label>

                            <div>
							@if($errors->has('name'))
								<span class=help-block>
								{{$errors->first('name')}}
								</span>
							@endif
                                <textarea rows="10" cols="100" name="name" id="post-name" class="form-control" value="{{ old('post') }}">
                                </textarea>
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Добавить
                                </button>
                            </div>
                        </div>



                    </form>
					<?}?>
                </div>
            </div>


            <!-- Current Tasks -->
            @if (count($posts) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Актуальные предложения
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped post-table">
                            <thead>
                                <th>Барахолка</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="table-text"><div><textarea readonly rows="3" cols="100">{{ $post->name }}</textarea></div></td>

                                        <!-- Task Delete Button -->
                                        <td>
										<? if (Auth::id()==$post->authorid) {?>

                                            <form action="{{ url('post/'.$post->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Удалить
                                                </button>
                                            </form>
											<?}?>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
