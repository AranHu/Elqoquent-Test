<tbody>
@foreach ($authorList as $author)
    <tr>
        {{--<td><a href="{{ URL::route('author.show', $author->id) }}">{{ $author->hasManyBook}}</a></td></br>--}}

        {{--
        hasMany的话就这样写
        @foreach ($author->hasManyBook as $item)
            <td>{{$item->id}}</td>
        @endforeach
        --}}
        {{--
        <td>
            <a href="{{ URL::route('author.edit', $author->id) }}" class="btn btn-success btn-mini pull-left">编辑</a>

            {{ Form::open(array('route' => array('author.destroy', $author->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
            <button type="submit" href="{{ URL::route('author.destroy', $author->id) }}" class="btn btn-danger btn-mini">删除</button>
            {{ Form::close() }}
        </td>
        --}}
{{--        <td>{{$author->hasManyPhone}}</td>--}}
    </tr>
@endforeach
<br>
@foreach($phoneList as $phone)
    {{--记得在用的时候要先判断是否存在--}}
    {{--这里是个奇葩么，要从多的一方找唯一的一方要写上括号？--}}
    {{--方法有么？肯定有。。。但是现在还没想出来--}}
    @if( ! empty($phone->belongsToAuthor()))
{{--        <td>{{$phone->belongsToAuthor()->}}</td>--}}

    @else
        <td>333</td>
    @endif
@endforeach
</tbody>