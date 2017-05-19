@extends('layouts.sinh_vien')
@section('content')
    <div>
        <form>
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <select name="hoc_ky" class="form-control select_hoc_ky" >
                {{--@foreach($term_present as $term)--}}
                    {{--<option value="{{$term->id_hoc_ky}}" data="{{$term->note}}" > {{$term->note}} </option>--}}
                {{--@endforeach--}}
            </select>
            <table class="table">
                <tr>

                </tr>
            </table>

        </form>
    </div>
@stop