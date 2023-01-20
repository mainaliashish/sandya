@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Contact'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>
                            Country
                        </th>
                        <th class="text-center">
                            Address
                        </th>
                        <th>Phone</th>
                        <th class="text-center" style="width: 30%">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            {{ $contact->country }}
                        </td>

                        <td class="text-center">
                            {{ $contact->address }}
                        </td>
                        <td>
                            {{ $contact->phone_number_one }}
                        </td>


                        <td class="project-actions text-center">
                            <a class="btn btn-primary btn-sm" href="{{ route('backend.contacts.show', $contact) }}">
                                <i class="far fa-eye"></i>
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('backend.contacts.edit', $contact) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('backend.contacts.delete', $contact) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection

