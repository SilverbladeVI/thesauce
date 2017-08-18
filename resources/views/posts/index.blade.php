@extends ('layout')

@section ('content')

        <div class="col-sm-8 blog-main">
          <!-- blog-post -->
          @foreach ($posts as $post)
          
          @include ('posts.post')
        
          @endforeach
            <!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main --> 
@endsection


@section ('footer')

<script src="/js/haha.js"></script>

@endsection
