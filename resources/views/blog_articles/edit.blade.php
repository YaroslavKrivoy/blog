@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($blogArticle, ['route' => ['blogArticles.update', $blogArticle->id], 'method' => 'patch']) !!}

                        @include('blog_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection