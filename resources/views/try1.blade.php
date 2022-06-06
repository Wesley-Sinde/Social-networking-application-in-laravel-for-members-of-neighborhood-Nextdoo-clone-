{{-- {{ dd($users) }} --}}
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

</style>
<table>
    @foreach ($users as $segment)
        <tr>
            <td>
                {{ $segment->id }}
            </td>
            <td>
                {{ $segment->Comment }}
            </td>
            <td>
                {{ $segment->name }}
            </td>
        </tr>
    @endforeach

</table>
<?php echo $users->render(); ?>
