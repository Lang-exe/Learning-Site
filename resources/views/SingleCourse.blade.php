@extends('Layout.TemplateCourse')

@section('containerPertama')
  <h1 class="display-4" style="text-align: center">{{ $course->nama }}</h1>
  <br><br>
  <div class="container">
      <div style="display: flex; background-color: #f1f1f1;">
          <div style="background-color: rgba(0, 149, 199, 0.192);width:100%;
          margin: 10px;text-align: center;line-height: 100px;
          font-size: large;"><a href="/SingleCourse/{{ $course->id }}">
            <p style="margin-top: 10px;">Nama Materi</p></a></div>
      </div>
  </div>
  <br>
@endsection
