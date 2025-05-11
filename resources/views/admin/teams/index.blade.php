@extends('admin.layouts.master')

@section('css')
    <style>
        .dropdown-menu {
            min-width: auto !important;
        }

        .custom-td {
            white-space: normal;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            word-wrap: break-word;
            text-align: center;
            vertical-align: middle;
        }

        .modal-footer {
            display: flex;
            justify-content: space-evenly;
        }

        .modal-body {
            display: flex;
            justify-content: center;
        }
    </style>
@endsection

@section('title', __('teams.manage_title'))

@section('content')
    <div class="card p-3" id="print">

        <div class="row gy-3 mb-3">
            <div class="col-lg-4">
                <form action="{{ route('admin.teams.index') }}" method="get" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control"
                        placeholder="{{ __('teams.search_placeholder') }}" style="margin-right: 10px;" />
                    <button type="submit" class="btn btn-warning">{{ __('teams.search') }}</button>
                </form>
            </div>
            <div class="col-lg-4">
                <form id="commentForm" method="get" action="{{ route('admin.teams.index') }}"
                    class="d-flex align-items-center">
                    <select id="perPageSelect" name="per_page" class="form-select" style="margin-right: 10px;"
                        onchange="this.form.submit()">
                        <option value="">{{ __('teams.items_per_page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <a href="{{ route('admin.teams.create') }}" class="btn btn-success ms-2">
                    <i class="ti ti-plus me-sm-1"></i> {{ __('teams.add_new') }}
                </a>
                <button class="btn btn-danger ms-2" id="btn_delete_all_modal" data-toggle="modal" data-target="#delete_all">
                    {{ __('teams.delete_all') }}
                </button>
            </div>
        </div>

        <span class="border border-2"></span>

        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input name="select_all" class="form-check-input" type="checkbox"
                                onclick="CheckAll('box1', this)" /></th>
                        <th class="custom-td">#</th>
                        <th class="custom-td">{{ __('teams.team_name') }}</th>
                        <th class="custom-td">{{ __('teams.email') }}</th>
                        <th class="custom-td">{{ __('teams.phone') }}</th>
                        <th class="custom-td">{{ __('teams.experience') }}</th>
                        <th class="custom-td">{{ __('teams.job_title') }}</th>
                        <th class="custom-td">{{ __('teams.details') }}</th>
                        <th class="custom-td">{{ __('teams.image') }}</th>
                        <th class="d-flex justify-content-center">{{ __('teams.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($teams as $team)
                        <tr>
                            <td class="custom-td">
                                <div class="form-check">
                                    <input class="form-check-input box1" type="checkbox" value="{{ $team->id }}" />
                                </div>
                            </td>
                            <td class="custom-td">{{ ($teams->currentPage() - 1) * $teams->perPage() + $loop->iteration }}
                            </td>
                            <td class="custom-td">{{ $team->getTranslation('name', app()->getLocale() ?? '') }}</td>
                            <td class="custom-td">{{ $team->email }}</td>
                            <td class="custom-td">{{ $team->phone }}</td>
                            <td class="custom-td">{{ $team->experience }}</td>                                
                            <td class="custom-td">
                                {{ Str::limit($team->getTranslation('job_title', app()->getLocale() ?? ''), 50) }}</td>
                            <td class="custom-td">
                                {{ Str::limit($team->getTranslation('details', app()->getLocale() ?? ''), 50) }}</td>
                            <td class="custom-td "><img src="{{ $team->image_url }}" width="90" height="111"
                                    alt=""></td>
                            <td class="custom-td">
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-pencil me-1"></i> {{ __('teams.edit') }}
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteTeamModal{{ $team->id }}">
                                        <i class="ti ti-trash me-1"></i> {{ __('teams.delete') }}
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteTeamModal{{ $team->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('teams.delete_title') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('teams.delete_confirm') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form id="deleteTeamForm{{ $team->id }}" method="POST"
                                            action="{{ route('admin.teams.destroy', $team->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-success">{{ __('teams.confirm_delete') }}</button>
                                        </form>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">{{ __('teams.cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $teams->appends(Request::except(['_token']))->links() }}
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.btn_delete_team').click(function() {
                var teamId = $(this).data('id');
                var deleteUrl = "{{ route('admin.teams.destroy', ':id') }}";
                deleteUrl = deleteUrl.replace(':id', teamId);
                $('#deleteTeamForm').attr('action', deleteUrl);
                $('#deleteTeamModal').modal('show');
            });
        });
    </script>
    <script>
        var deleteRoute = "{{ route('admin.teams.destroy.all') }}";
    </script>
@endsection
