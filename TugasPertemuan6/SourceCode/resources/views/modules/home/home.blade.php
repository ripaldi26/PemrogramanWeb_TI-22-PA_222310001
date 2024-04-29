@extends('templates.layout')

@section('content')
    <div class="card-body" style="margin-top: 90px">
        <table class="table table-bordered border-dark ">
            <thead class="table-secondary fs-4 text text-center">
                <tr>
                    <th scope="col">Course</th>
                    <th scope="col">Type</th>
                    <th scope="col">Rate</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $isFirstMatkul = true;
                @endphp
                @foreach ($data['skill'] as $index => $result)
                    @if ($result['course'] === 'Matematika')
                        @if ($isFirstMatkul)
                            @php
                                $colspan = count(array_filter($data['skill'], function($item) {
                                    return $item['course'] === 'Matematika';
                                }));
                            @endphp
                            <tr>
                                <td rowspan="{{ $colspan }}">{{ $result['course'] }}</td>
                                <td>{{ $result['type'] }}</td>
                                <td>
                                    @for ($i = 4; $i >= 0; $i--)
                                        <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                    @endfor
                                </td>
                            </tr>
                            @php
                                $isFirstMatkul = false;
                            @endphp
                        @else
                            <tr>
                                <td>{{ $result['type'] }}</td>
                                <td>
                                    @for ($i = 4; $i >= 0; $i--)
                                        <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                    @endfor
                                </td>
                            </tr>
                        @endif
                    @else
                        <tr>
                            <td>{{ $result['course'] }}</td>
                            <td>{{ $result['type'] }}</td>
                            <td>
                                @for ($i = 4; $i >= 0; $i--)
                                    <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                @endfor
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
