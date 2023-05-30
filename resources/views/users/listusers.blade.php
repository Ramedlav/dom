<!-- START PANEL -->
<div class="card panel-transparent">
    <div class="card-body table-responsive">
        <!--<div class="table-responsive">-->
       	<table class="table table-striped table-hover table-sm table-bordered tablesorted" id="table_listusers">
                <thead class="thead-dark">
                    <th style="width:2%" class="text-center align-middle">{{ __('№') }}</th>
                    <th style="width:15%" class="text-center align-middle">{{ __('Name') }}</th>
                    <th style="width:8%" class="text-center align-middle">{{ __('Role') }}</th>
                    <th style="width:5%" class="text-center align-middle">{{ __('Status') }}</th>
                    <th style="width:5%" class="text-center align-middle">{{ __('Phone') }}</th>
                    <th style="width:10%" class="text-center align-middle">{{ __('Email') }}</th>
                    <th style="width:2%" class="text-center align-middle">{{ __('') }}</th>
                </thead>
                <tbody>
                    @forelse($users as $user)
@php
	if($user->role_id == 1) $role_name="Administrator"; else $role_name="User";
	if($user->status_id == 1) $status_name="Enabled"; else $status_name="Disabled";
@endphp
                    <tr>
                        <td class="text-center">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ __("$role_name") }}</td>
                        <td>{{ __("$status_name") }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
				<a href="{{ route('editEditUser', $user->id) }}">
					<img src="/img/icons/edit-square-outline.svg">
				</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        <!--</div>-->
    </div>
</div>
<!-- END PANEL -->