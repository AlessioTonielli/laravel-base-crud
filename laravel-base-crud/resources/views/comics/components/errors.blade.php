@if(count($errors->all())>0)
<ul class="errors">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach


</ul>
    
@endif