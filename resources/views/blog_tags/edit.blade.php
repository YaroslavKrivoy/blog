@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog Tag
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($blogTag, ['route' => ['blogTags.update', $blogTag->id], 'method' => 'patch']) !!}

                        @include('blog_tags.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection