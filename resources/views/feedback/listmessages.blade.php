<!-- START PANEL -->
<div class="card panel-transparent">
    <div class="card-body table-responsive">
        <!--<div class="table-responsive">-->
       	<table class="table table-striped table-hover table-sm table-bordered tablesorted" id="table_listusers">
                <thead class="thead-dark">
                    <th style="width:2%" class="text-center align-middle">{{ __('№') }}</th>
                    <th style="width:15%" class="text-center align-middle">{{ __('Date') }}</th>
                    <th style="width:25%" class="text-center align-middle">{{ __('Name') }}</th>
                    <th style="width:20%" class="text-center align-middle">{{ __('Email') }}</th>
                    <th style="width:38%" class="text-center align-middle">{{ __('message') }}</th>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->id }}</td>
                        <td class="text-center">{{ $user->created_at }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->message }}</td>
                    </tr>
                    @empty
                    <tr>
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