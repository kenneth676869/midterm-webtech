<!-- Dota2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dota2_id', 'Dota2 Id:') !!}
    {!! Form::text('dota2_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Day Start Online Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_start_online', 'Day Start Online:') !!}
    {!! Form::text('day_start_online', null, ['class' => 'form-control','id'=>'day_start_online']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#day_start_online').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Day Stop Online Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_stop_online', 'Day Stop Online:') !!}
    {!! Form::text('day_stop_online', null, ['class' => 'form-control','id'=>'day_stop_online']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#day_stop_online').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Number Of Hrs Played Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_hrs_played', 'Number Of Hrs Played:') !!}
    {!! Form::number('number_of_hrs_played', null, ['class' => 'form-control']) !!}
</div>