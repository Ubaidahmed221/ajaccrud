@foreach ($member as $data)
<tr>
    <td>{{ $data->m_id }}</td>
    <td>{{ $data->first_name }}</td>
    <td>{{ $data->last_name }}</td>
    <td>
        <a href="#" class="btn btn-success edit"
        data-first="{{ $data->first_name }}" data-last="{{ $data->last_name }}" data-id="{{ $data->m_id }}">Edit</a>
        <a href="#" class="btn btn-danger delete" data-id="{{ $data->m_id }}">Delete</a>

    </td>

</tr>

@endforeach

