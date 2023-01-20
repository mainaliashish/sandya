@if($tags ?? '')
<meta name="tags" content="{{ $tags }}" />
@endif
@if($title ?? '')
<meta name="title" content="{{ $title }}" />
@endif
@if($description ?? '')
<meta name="description" content="{{ $description }}" />
@endif

@if($about->facebook)
<meta name="facebook" content="{{ $about->facebook }}" />
@endif
@if($about->site_name)
<meta name="author" content="{{ $about->site_name  }}" />
@endif
@if(Request::url())
<meta name="url" content="{{ Request::url()  }}" />
@endif

@if($contents ?? '')
@foreach($contents as $content)
    <meta name="keywords" content="{{ $content->meta_tags }}" />
    <meta name="title" content="{{ $content->meta_title }}" />
    <meta name="description" content="{{ $content->meta_description }}" />
    <meta name="{{ $class }}-title-{{ $loop->iteration }}" content="{{ $content->title ?? $content->service_name }}" />
@endforeach
@endif

<meta property="og:type" content="website"/>
<meta property="og:locale" content="en_US" />
@if($title ?? '')
<meta property="og:title" content="{{ $title }}" />
@endif
@if($description ?? '')
<meta property="og:description" content="{{ Str::limit($description, 100) }}" />
@endif
@if(Request::url())
<meta property="og:url" content="{{ Request::url() }}" />
@endif
