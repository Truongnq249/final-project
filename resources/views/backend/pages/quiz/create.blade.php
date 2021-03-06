@extends('./backend/layout/master')
@section('title','Quản Trị Quiz')
@section('title_page','Thêm Mới Câu Hỏi')
@section('content')


<div class="col-12 m-auto">
    <form class="mt-4" action="{{ route('quiz.store') }}" method="POST">
        @csrf
        @if(session('thongbao'))
        <div class="alert alert-primary" role="alert">
        {{session('thongbao')}}
        </div>
        @endif

        <div class="form-group">
            <label>Câu Hỏi: </label>
            <br>
            {!! ShowErrors($errors,'question') !!}
            <textarea class="form-control pt-4" name="question" cols="10" rows="5">{{ old('question') }}</textarea>
        </div>
        <div class="form-group">
            <label>Câu Trả Lời A: </label>
            <br>
            {!! ShowErrors($errors,'answer1') !!}
            <textarea class="form-control pt-2" name="answer1" cols="10" rows="1">{{ old('answer1') }}</textarea>
        </div>
        <div class="form-group">
            <label>Câu Trả Lời B: </label>
            <br>
            {!! ShowErrors($errors,'answer2') !!}
            <textarea class="form-control pt-2" name="answer2" cols="10" rows="1">{{ old('answer2') }}</textarea>
        </div>
        <div class="form-group">
            <label>Câu Trả Lời C: </label>
            <br>
            {!! ShowErrors($errors,'answer3') !!}
            <textarea class="form-control pt-2" name="answer3" cols="10" rows="1">{{ old('answer3') }}</textarea>
        </div>
        <div class="form-group">
            <label>Câu Trả Lời D: </label>
            <br>
            {!! ShowErrors($errors,'answer4') !!}
        <textarea class="form-control pt-2" name="answer4" cols="10" rows="1">{{ old('answer4') }}</textarea>
        </div>


        <label>Câu Trả Lời Chính Xác: </label>
        <br>
        {!! ShowErrors($errors,'correct_answer') !!}
        <div class="form-check pl-4">
            <input name="correct_answer" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="A">
            <label class="form-check-label pl-2" for="exampleRadios2">
                A
            </label>
        </div>
        <div class="form-check pl-4">
            <input name="correct_answer" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="B">
            <label class="form-check-label pl-2" for="exampleRadios3">
                B
            </label>
        </div>
        <div class="form-check pl-4">
            <input name="correct_answer" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="C">
            <label class="form-check-label pl-2" for="exampleRadios4">
                C
            </label>
        </div>
        <div class="form-check pl-4">
            <input name="correct_answer" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="D">
            <label class="form-check-label pl-2" for="exampleRadios5">
                D
            </label>
        </div>
        <input type="hidden" name="level_id" value="{{ $level }}">
        <input type="hidden" name="quiz_id" value="{{ $quiz }}">
        <button type="submit" class="mt-5 mb-5 btn btn-primary">Thêm Câu Hỏi</button>
    </form>
</div>
@endsection
