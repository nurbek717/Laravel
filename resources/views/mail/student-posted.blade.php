<div>
    <h1>
        {{$student->name}} {{$student->lastname}}
    </h1>
    <h1>You have a new email message!</h1>
    <a href="{{url('/students/' . $student->id)}}">
        Show the student details
    </a>
</div>
