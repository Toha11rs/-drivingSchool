<h3>Ближайшие уроки вождения</h3>
{{$nearLesson->instructor->name}}<br>
{{$nearLesson->start_time}}<br>
{{$nearLesson->instructor-> drivingCar->brand}}<br>
{{$nearLesson->instructor-> drivingCar->number}}<br>
<br>
@include("Instructor.modal.DrivingLessonModal")
