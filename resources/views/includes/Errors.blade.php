

@if (count($errors)>0)
<div class="alert alert-danger">
        <ul>
    @foreach ($errors->all() as $error )
       <li>
            <p class="bg-danger">  {{ $error }} </p>
        </li>
    @endforeach
        </ul>
</div>
@endif
