@extends('layout')
@section('title', 'キャラクター新規作成')
@section('content')

<body>
    <div id="create">
        <form action="store" id="create-account" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label for="english_name">English Name:</label>
                <input type="text" id="english_name" name="english_name" value="{{ old('english_name') }}">
            </div>
            <div>
                <label for="attributes_id">Attributes ID:</label>
                <select id="attributes_id"  name="attributes_id">
                    @foreach($attributes as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="categories_id">Categories ID:</label>
                @foreach ($categories as $category)
                    <input type="checkbox" id="category.{{$category['id']}}" name="categories_id[]" value="{{$category['id']}}">
                    <label for="category.{{$category['id']}}">{{$category['name']}}</label>
                @endforeach
            </div>
            <div>
                <label for="ls1_categories_id">LS1 Categories ID:</label>
                <select id="ls1_categories_id"  name="ls1_categories_id">
                    <option value="">なし</option>
                    @foreach($categories as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ls1_multiplier">LS1 Multiplier:</label>
                <input type="number" step="10" id="ls1_multiplier" name="ls1_multiplier" value="{{ old('ls1_multiplier') }}">
            </div>
            <div>
                <label for="ls2_categories_id">LS2 Categories ID:</label>
                <select id="ls2_categories_id"  name="ls2_categories_id">
                    <option value="">なし</option>
                    @foreach($categories as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ls2_multiplier">LS2 Multiplier:</label>
                <input type="number" step="10" id="ls2_multiplier" name="ls2_multiplier" value="{{ old('ls2_multiplier') }}">
            </div>
            <div>
                <label for="ls3_categories_id">LS3 Categories ID:</label>
                <select id="ls3_categories_id"  name="ls3_categories_id">
                    <option value="">なし</option>
                    @foreach($categories as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ls3_multiplier">LS3 Multiplier:</label>
                <input type="number" step="10" id="ls3_multiplier" name="ls3_multiplier" value="{{ old('ls3_multiplier') }}">
            </div>
            <div>
                <label for="ls_attributes_id">LS Attributes ID:</label>
                <select id="ls_attributes_id"  name="ls_attributes_id">
                    <option value="">なし</option>
                    @foreach($attributes as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ls_attributes_multiplier">LS Attributes Multiplier:</label>
                <input type="number" step="10" id="ls_attributes_multiplier" name="ls_attributes_multiplier" value="{{ old('ls_attributes_multiplier') }}">
            </div>
            <div>
                <label for="ls1_200">LS1 200:</label>
                <select id="ls1_200"  name="ls1_200">
                    <option value="">なし</option>
                    @foreach($categories as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ls2_200">LS2 200:</label>
                <select id="ls2_200"  name="ls2_200">
                    <option value="">なし</option>
                    @foreach($categories as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ls3_200">LS3 200:</label>
                <select id="ls3_200"  name="ls3_200">
                    <option value="">なし</option>
                    @foreach($categories as $value)
                    <option value="{{$value['id']}}">
                        {{$value['name']}}
                    </option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="submit">
        </form>
    </div>
</body>
@endsection