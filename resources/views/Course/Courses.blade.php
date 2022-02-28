@extends('Layout.Template2')

@section('containerPertama')
  <h1 class="display-4" style="text-align: center">Courses</h1>
  <br>
  @foreach($courses as $course)
    <div class="container">
      <div style="display: flex; background-color: #f1f1f1;">
          <div style="background-color: rgba(0, 149, 199, 0.192);width:90%;margin: 10px;text-align: center;line-height: 100px;font-size: large;"><a href="SingleCourse/{{ $course->id }}"><img style="margin-top: 10px; margin-bottom: 10px; width: 100px;" src="" alt="image.png" ></a></div>
          <div style="background-color: rgba(0, 149, 199, 0.192);width:90%;margin: 10px;text-align: center;line-height: 100px;font-size: large;"><a href="SingleCourse/{{ $course->id }}"><p style="margin-top: 10px;">{{ $course["nama"] }}</p></a></div>
      </div>
    </div>
    <br>
  @endforeach
@endsection
