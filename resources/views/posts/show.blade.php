
@section('title',$post->title)
<x-layout>
    <main class="container">
        
        
    <div class="row g-5">
        <div class="col-md-8">
          
            
          <article class="blog-post">
            <h2 class="blog-post-title"></h2>
            <p class="blog-post-meta">بقلم <a href="#">{{$post->author }}</a> 
                  {{Carbon\Carbon::parse($post->created_at)->diffForhumans() }}
            </p>
            <p >
                <?= $post->body ?>
            </p>
            <h1>التعليقات</h1>
            @if (count($comments) == 0)
                <h3>لا يوجد تعليقات</h3>
            
            @else
            @foreach ($comments as $comment)
              <h4>{{$comment->name}}</h4>
              <p>{{$comment->body }}</p>
            
            @endforeach
            @endif
          </article>
        
        </div>
        <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
            </div>

            <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
                <li><a href="#">March 2021</a></li>
                <li><a href="#">February 2021</a></li>
                <li><a href="#">January 2021</a></li>
                <li><a href="#">December 2020</a></li>
                <li><a href="#">November 2020</a></li>
                <li><a href="#">October 2020</a></li>
                <li><a href="#">September 2020</a></li>
                <li><a href="#">August 2020</a></li>
                <li><a href="#">July 2020</a></li>
                <li><a href="#">June 2020</a></li>
                <li><a href="#">May 2020</a></li>
                <li><a href="#">April 2020</a></li>
            </ol>
            </div>

            <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
            </div>
        </div>
        </div>
    </div>

    </main>
</x-layout>

