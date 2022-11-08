@if($errors->any())
{{$errors->first()}}
@endif
<form action="{{url('AddData')}}" method="POST">
    @csrf
    <input type="text" name="title"  class="@error('title') is-invalid @enderror"/>
    @error('title')
        {{$message}}
    @enderror
    <input type="text" name="description"/>
    @error('description')
        {{$message}}
    @enderror
    <button>Submit</button>
</form>
