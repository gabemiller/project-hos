@extends('_frontend.master')

@section('breadcrumb')
    {{ HTML::decode(Breadcrumbs::render('fooldal')) }}
@stop

@section('content')
    <div class="main__welcome">
        <a href="http://www.adhatvonal.hu/?cgen=szervezet-adatlap&id=1196"></a>
    </div>
    <div class="articles">
        @foreach($articles as $article)
            <article class="articles-item">
                    @if(count($article->gallery) && count($article->gallery->pictures))
                        <img class="img-responsive articles-item__image"
                             src="{{URl::route('kep.show',['url'=>urlencode($article->gallery->pictures[0]->picture_path),'width'=>300,'height'=>200]) }}"
                             alt="{{$article->gallery->pictures[0]->name}}"
                             title="{{$article->gallery->pictures[0]->name}}"/>
                    @endif
                    <h2 class="articles-item__title">{{HTML::linkRoute('hirek.show',$article->title,array('id'=>$article->id,'title'=>\Str::slug($article->title)))}}</h2>
                    <p class="articles-item__info">{{$article->getCreatedAt()}}</p>
                    <p class="article-content">{{$article->getParragraph()}}</p>
                    {{HTML::linkRoute('hirek.show','Bővebben',array('id'=>$article->id,'title'=>\Str::slug($article->title)),array('class'=>'articles-item__button btn btn-sm'))}}
            </article>
        @endforeach
    </div>

    <div class="text-center">
        {{$articles->links()}}
    </div>
@stop