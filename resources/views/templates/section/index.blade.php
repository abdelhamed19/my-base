<x-admin.admin-layout-component>
    @section('title', $modelName)
    @section('content')
        <div class="row">
            <!-- Striped rows -->
            <div class="col-md-12 my-4">
                <h2 class="h4 mb-1">{{ __("admin.section") }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="toolbar row mb-3">
                            <div class="col-6">
                                <form class="form-inline">
                                    <div class="form-row">
                                        <div class="form-group col-auto">
                                            <label for="search" class="sr-only">Search</label>
                                            <input type="text" class="form-control" id="search" value=""
                                                placeholder="Search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col ml-auto">
                                <div class="dropdown float-right">
                                    <a href="" role="button"
                                        class="btn btn-primary float-right ml-3">{{ __('admin.create') }}</a>

                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>

                                    <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                                        <a class="dropdown-item export-selected" href="javascript:void(0)">Export</a>
                                        <a class="dropdown-item delete-selected" href="javascript:void(0)"
                                            data-model="Country">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table -->
                        <div class="table-wrapper">
                        <table class="table table-bordered">
                            <thead>
                                <tr role="row">
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="all">
                                            <label class="custom-control-label" for="all"></label>
                                        </div>
                                    </th>
                                    <th>{{ __('admin.id') }}</th>
                                    <th>{{ __('admin.name') }}</th>
                                    <th>{{ __('admin.status') }}</th> <!-- إضافة عنوان العمود -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($model as $data)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input row-checkbox"
                                                 data-id="{{ $data->id }}"
                                                 id="checkbox-{{ $data->id }}">
                                                <label class="custom-control-label"
                                                        for="checkbox-{{ $data->id }}"></label>
                                            </div>

                                        </td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->getTranslation($data->name) }}</td>
                                        <td>
                                            <x-admin.toggle-switch :id="$data->id" :isActive="$data->is_active" :model="$modelName" />
                                        </td>
                                        <td>
                                            <a href="" role="button" class="btn mb-2 btn-secondary btn-sm">Edit</a>
                                            <a href="" role="button" class="btn mb-2 btn-danger btn-sm">Delete</a>
                                            <a href="" role="button" class="btn mb-2 btn-primary btn-sm">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">لا توجد بيانات متاحة</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                        <nav aria-label="Table Paging" class="mb-0 text-muted">
                            <ul class="pagination justify-content-end mb-0">
                                {{ $model->links() }}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
    @endsection
</x-admin.admin-layout-component>
