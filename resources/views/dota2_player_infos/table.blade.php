<div class="table-responsive">
    <table class="table" id="dota2PlayerInfos-table">
        <thead>
            <tr>
                <th>Dota2 Id</th>
        <th>Day Start Online</th>
        <th>Day Stop Online</th>
        <th>Number Of Hrs Played</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dota2PlayerInfos as $dota2PlayerInfo)
            <tr>
                <td>{{ $dota2PlayerInfo->dota2_id }}</td>
            <td>{{ $dota2PlayerInfo->day_start_online }}</td>
            <td>{{ $dota2PlayerInfo->day_stop_online }}</td>
            <td>{{ $dota2PlayerInfo->number_of_hrs_played }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dota2PlayerInfos.destroy', $dota2PlayerInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dota2PlayerInfos.show', [$dota2PlayerInfo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dota2PlayerInfos.edit', [$dota2PlayerInfo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
