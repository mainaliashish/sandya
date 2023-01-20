@extends('backend.layouts.app')
{{-- {{ dd($comments) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Comments'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Comments {{ $comments->blog->title ?? '' }}</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped comments">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            e-mail
                        </th>
                        <th style="width:35%" class="text-center">
                            comment
                        </th>
                        <th class="text-center">Status</th>
                        <th style="width:25%" class="text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>
                            {{ $comment->name }}
                        </td>
                        <td>
                            {{ $comment->email }}
                        </td>
                        <td class="comment_progress text-center">
                            {!! Str::limit($comment->comment, 100, $end="......") !!}
                        </td>
                        <td class="text-center"><a href="{{ route('backend.comments.status', $comment) }}" class="{{ $comment->is_published ? 'badge badge-success' : 'badge badge-danger' }}"> {{ $comment->is_published ? 'Published' : 'Unpublished' }} </a></td>

                        <td class="comment-actions text-center">
                            <a class="btn btn-primary btn-sm" href="{{ route('backend.comments.show', $comment->id) }}">
                                <i class="fas fa-eye">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('backend.comments.destroy', $comment->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->

    <div class="card-footer clearfix">
        {{ $comments->links() }}
    </div>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->
@endsection

